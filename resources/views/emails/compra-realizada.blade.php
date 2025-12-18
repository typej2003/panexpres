<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
</head>
<body style="font-family: 'Segoe UI', Arial, sans-serif; margin: 0; padding: 0; background-color: #f4f4f4;">
    <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
        <tr>
            <td align="center" style="padding: 20px 0;">
                
                <table role="presentation" width="600" cellspacing="0" cellpadding="0" border="0" style="background-color: #ffffff; border-radius: 8px; overflow: hidden; border: 1px solid #dee2e6; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
                    
                    <tr>
                        <td style="padding: 40px 30px 20px 30px; text-align: center;">
                            <img src="{{ asset('img/logopanexpres_color.png') }}" alt="Logo Pan Express" width="200" style="display: block; margin: 0 auto; max-width: 220px; height: auto; border: 0;">
                            <hr style="width: 80%; border: 0; border-top: 5px solid #893e08; margin: 20px auto 0 auto; opacity: 1;">
                        </td>
                    </tr>

                    <tr>
                        <td style="padding: 20px 40px 30px 40px;">
                            <h1 style="color: #333333; font-size: 24px; margin-bottom: 20px; font-family: 'Segoe UI', Tahoma, sans-serif;">
                                Hola, {{ $names }} {{ $surnames }}
                            </h1>
                            <p style="color: #555555; font-size: 16px; line-height: 1.6; margin-bottom: 10px;">¡Gracias por tu compra!</p>
                            <p style="color: #555555; font-size: 16px; line-height: 1.6;">{!! $body !!}</p>
                            
                            <table role="presentation" cellspacing="0" cellpadding="0" border="0" style="margin: 30px auto;">
                                <tr>
                                    <td align="center" bgcolor="#f96b21" style="border-radius: 5px;">
                                        <a href="https://panexpres.com/detallespedido/{{ $nropedido }}" target="_blank" style="font-size: 16px; font-family: Helvetica, Arial, sans-serif; color: #ffffff; text-decoration: none; padding: 12px 30px; display: inline-block; font-weight: bold;">
                                            Sigue tu pedido
                                        </a>
                                    </td>
                                </tr>
                            </table>

                            <p style="font-size: 14px; color: #888888; text-align: center; margin-top: 20px;">
                                Rastrea tu pedido desde nuestro portal.
                            </p>
                        </td>
                    </tr>

                    <tr>
                        <td bgcolor="#8a3c10" style="padding: 30px 10px; color: #ffffff;">
                            <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
                                <tr>
                                    <td width="33%" align="center" style="vertical-align: middle;">
                                        <table role="presentation" cellspacing="0" cellpadding="0" border="0">
                                            <tr>
                                                <td align="center">
                                                    <a href="https://instagram.com/panexpres" target="_blank">
                                                        <img src="{{ asset('img/instagram_blanco.png') }}" width="32" alt="Instagram" style="display: block; border: 0;">
                                                    </a>
                                                </td>
                                                <td width="10"></td>
                                                <td align="center">
                                                    <a href="https://tiktok.com/@panexpres" target="_blank">
                                                        <img src="{{ asset('img/tiktok_blanco.png') }}" width="32" alt="TikTok" style="display: block; border: 0;">
                                                    </a>
                                                </td>
                                                <td width="10"></td>
                                                <td align="center">
                                                    <a href="https://facebook.com/panexpres" target="_blank">
                                                        <img src="{{ asset('img/facebook_blanco.png') }}" width="32" alt="Facebook" style="display: block; border: 0;">
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>

                                    <td width="34%" align="center" style="vertical-align: middle; border-left: 1px solid rgba(255,255,255,0.3); border-right: 1px solid rgba(255,255,255,0.3);">
                                        <div style="font-size: 11px; font-family: Arial, sans-serif; line-height: 1.8;">
                                            <a href="mailto:ventas@panexpres.com" style="color: #ffffff; text-decoration: none; font-weight: bold; display: inline-block; margin-bottom: 5px;">
                                                <img src="{{ asset('img/correo_blanco.png') }}" width="14" style="vertical-align: middle; margin-right: 4px;" alt="Email"> ventas@panexpres.com
                                            </a>
                                            <br>
                                            <a href="https://panexpres.com" style="color: #ffffff; text-decoration: none; font-weight: bold; display: inline-block;">
                                                <img src="{{ asset('img/internet_blanco.png') }}" width="14" style="vertical-align: middle; margin-right: 4px;" alt="Web"> panexpres.com
                                            </a>
                                        </div>
                                    </td>

                                    <td width="33%" align="center" style="vertical-align: middle;">
                                        <a href="https://wa.me/5804141869016" style="text-decoration: none; color: #ffffff;">
                                            <img src="{{ asset('img/whatsapp_blanco.png') }}" width="32" alt="WhatsApp" style="display: block; margin: 0 auto 5px auto; border: 0;">
                                            <span style="font-size: 10px; font-family: Arial, sans-serif; font-weight: bold; text-transform: uppercase;">Asesoría</span>
                                        </a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>

                <p style="font-size: 11px; color: #999999; margin-top: 20px; max-width: 600px; text-align: center; line-height: 1.4; font-family: Arial, sans-serif;">
                    Has recibido este correo porque realizaste una compra en <strong>Pan Express</strong>.<br>
                    &copy; {{ date('Y') }} Pan Express. Todos los derechos reservados.
                </p>

            </td>
        </tr>
    </table>
</body>
</html>