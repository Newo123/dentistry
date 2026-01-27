<?php
session_start();

require __DIR__ . '/../../../../wp-load.php';


function sendMail($data, $config, $template = 'callback')
{
  try {
    // Извлекаем данные для шаблона
    extract($data);
    $link_page = $_SERVER['HTTP_REFERER'] ?? '';

    // Генерируем тело письма из шаблона
    ob_start();
    $template_path = 'mail-tpl/' . $template . ".tpl";
    if (file_exists($template_path)) {
      require($template_path);
    } else {
      // Шаблон по умолчанию
      require('mail-tpl/callback.tpl');
    }
    $body = ob_get_clean();

    // Подключаем PHPMailer
    require_once('phpmailer/class.phpmailer.php');

    // Настраиваем отправку
    $mail = new PHPMailer(true);
    $mail->IsSMTP();
    $mail->Host = $config['smtp_host'];
    $mail->SMTPDebug = $config['debug'];
    $mail->SMTPAuth = $config['auth'];
    $mail->Port = $config['smtp_port'];
    $mail->SMTPSecure = $config['secure'];
    $mail->CharSet = 'UTF-8';
    $mail->Username = $config['smtp_username'];
    $mail->Password = $config['smtp_password'];
    $mail->Subject = 'Форма обратной связи с сайта';

    // Настраиваем отправителя и получателя
    $mail->SetFrom($config['smtp_username'], $config['site_name'] ?? 'Сайт');
    $mail->AddAddress($config['smtp_alert']);

    // Добавляем копии если есть
    if (!empty($config['email_copy'])) {
      $copies = is_array($config['email_copy']) ? $config['email_copy'] : [$config['email_copy']];
      foreach ($copies as $copy_email) {
        $mail->AddCC($copy_email);
      }
    }

    // Устанавливаем тело письма
    $mail->MsgHTML($body);

    // Отправляем
    $is_sent = $mail->Send();

    return [
      'success' => $is_sent === true,
      'message' => $is_sent ? 'Письмо отправлено' : 'Ошибка отправки письма',
      'error' => $is_sent ? null : $mail->ErrorInfo
    ];
  } catch (Exception $e) {
    return [
      'success' => false,
      'message' => 'Ошибка PHPMailer',
      'error' => $e->getMessage()
    ];
  }
}

function main()
{
  // Проверка безопасности
  if (empty($_POST['hash']) || hash('sha256', $_SERVER['REMOTE_ADDR'] . $_SERVER['HTTP_USER_AGENT'] . date('Y-M')) !== $_POST['hash']) {
    return [
      'success' => false,
      'message' => 'Ошибка безопасности',
      'type' => 'security_error'
    ];
  }


  // Подготавливаем данные из формы
  $form_data = [];
  foreach ($_POST as $key => $value) {
    if ($key !== 'hash') {
      $form_data[$key] = is_string($value) ? trim($value) : $value;
    }
  }

  // Добавляем метаданные
  $form_data['page_url'] = $_SERVER['HTTP_REFERER'] ?? '';
  $form_data['ip_address'] = $_SERVER['REMOTE_ADDR'] ?? '';
  $form_data['user_agent'] = $_SERVER['HTTP_USER_AGENT'] ?? '';
  $form_data['timestamp'] = date('Y-m-d H:i:s');


  $base_config = [
    'site_name' => get_bloginfo('name') ?: 'Сайт',
    'debug' => 1,
    'auth' => true,
    'secure' => 'ssl'
  ];

  // Конфигурация для почты
  $mail_config = array_merge($base_config, [
    'smtp_host' => '',
    'smtp_port' => 465,
    'smtp_username' => 'noreply@artellect-agency.ru',
    'smtp_password' => '',
    'smtp_alert' => '',
    'email_copy' => []
  ]);


  if (function_exists('get_field')) {
    $mail_settings = get_field('site_emails_to', 'options');

    if ($mail_settings) {
      $mail_config['smtp_host'] = $mail_settings['smtp_host'] ?? $mail_config['smtp_host'];
      $mail_config['smtp_port'] = $mail_settings['smtp_port'] ?? $mail_config['smtp_port'];
      $mail_config['smtp_username'] = $mail_settings['smtp_username'] ?? $mail_config['smtp_username'];
      $mail_config['smtp_password'] = $mail_settings['smtp_password'] ?? $mail_config['smtp_password'];
      $mail_config['smtp_alert'] = $mail_settings['smtp_alert'] ?? $mail_config['smtp_password'];
    }
  }


  // Получаем тип шаблона

  $template = $_GET['template'] ?? 'callback';

  // Отправляем на почту
  $mail_result = sendMail($form_data, $mail_config, $template);



  // Формируем итоговый ответ
  $response = [
    'success' => $mail_result['success'],
    'mail' => $mail_result,
    'timestamp' => $form_data['timestamp'],
    'data' => $form_data,
  ];

  // Определяем статус сообщения
  if ($mail_result['success']) {
    $response['message'] = 'Заявка успешно отправлена!';
    $response['type'] = 'full_success';
  } elseif ($mail_result['success']) {
    $response['message'] = 'Заявка успешно отправлена!';
    $response['type'] = 'mail_only';
  } else {
    $response['message'] = 'Ошибка отправки заявки';
    $response['type'] = 'error';
  }

  return $response;
}


// Выполняем и возвращаем результат
header('Content-Type: application/json; charset=utf-8');
echo json_encode(main(), JSON_UNESCAPED_UNICODE);
