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
                            <img src="{{ $message->embed(public_path('img/logopanexpres_color.png')) }}" alt="Logo Pan Express" width="180" style="display: block; margin: 0 auto; max-width: 180px; height: auto;">
                            <hr style="width: 80%; border: 0; border-top: 5px solid #893e08; margin: 20px auto 0 auto; opacity: 1;">
                        </td>
                    </tr>

                    <tr>
                        <td style="padding: 20px 40px 30px 40px;">
                            <h1 style="color: #333333; font-size: 24px; margin-bottom: 20px; font-family: 'Segoe UI', Tahoma, sans-serif;">
                                Hola, {{ $names }} {{ $surnames }}
                            </h1>
                            <p style="color: #555555; font-size: 16px; line-height: 1.6;">¡Gracias por tu compra!</p>
                            <p style="color: #555555; font-size: 16px; line-height: 1.6;">{!! $body !!}</p>
                            <p style="color: #555555; font-size: 16px; line-height: 1.6;">Te invitamos a disfrutar todos nuestros productos.</p>
                            
                            <table role="presentation" cellspacing="0" cellpadding="0" border="0" style="margin: 30px auto;">
                                <tr>
                                    <td align="center" bgcolor="#198754" style="border-radius: 5px;">
                                        <a href="#" target="_blank" style="font-size: 16px; font-family: Helvetica, Arial, sans-serif; color: #ffffff; text-decoration: none; padding: 12px 30px; display: inline-block; font-weight: bold;">
                                            Sigue tu pedido
                                        </a>
                                    </td>
                                </tr>
                            </table>

                            <p style="font-size: 14px; color: #888888; text-align: center; margin-top: 20px;">
                                Rastrea, reprograma o cancela tu pedido desde nuestro portal.
                            </p>
                        </td>
                    </tr>

                    <tr>
                        <td bgcolor="#873e07" style="padding: 40px 30px; color: #ffffff;">
                            <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
                                <tr>
                                    <td width="240" style="vertical-align: top; padding-bottom: 20px;">
                                        <div style="font-size: 1rem; font-weight: bold; margin-bottom: 15px; font-family: Arial, sans-serif;">
                                            Síguenos en nuestras redes
                                        </div>
                                        
                                        <table role="presentation" cellspacing="0" cellpadding="0" border="0">
                                            <tr>
                                                <td align="center" bgcolor="#ffffff" style="border-radius: 50%; width: 35px; height: 35px;">
                                                    <a href="#" style="color: #dd751a; text-decoration: none; font-weight: bold; font-size: 12px; line-height: 35px; display: block;">IG</a>
                                                </td>
                                                <td width="10"></td>
                                                <td align="center" bgcolor="#ffffff" style="border-radius: 50%; width: 35px; height: 35px;">
                                                    <a href="#" style="color: #dd751a; text-decoration: none; font-weight: bold; font-size: 12px; line-height: 35px; display: block;">TK</a>
                                                </td>
                                                <td width="10"></td>
                                                <td align="center" bgcolor="#ffffff" style="border-radius: 50%; width: 35px; height: 35px;">
                                                    <a href="#" style="color: #dd751a; text-decoration: none; font-weight: bold; font-size: 12px; line-height: 35px; display: block;">FB</a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>

                                    <td style="vertical-align: top; padding-left: 10px;">
                                        <div style="font-size: 1.1rem; font-weight: bold; margin-bottom: 15px; border-bottom: 2px solid #fc5e27; display: inline-block; padding-bottom: 5px;">
                                            Contacto
                                        </div>
                                        <div style="font-size: 0.95rem; line-height: 2.2;">
                                            <span style="font-size: 16px; margin-right: 5px;">&#9993;</span> 
                                            <a href="mailto:ventas@panexpres.com" style="color: #ffffff; text-decoration: none;">ventas@panexpres.com</a>
                                            <br>
                                            
                                            <span style="font-size: 16px; margin-right: 5px;">&#127760;</span> 
                                            <a href="https://panexpres.com" style="color: #ffffff; text-decoration: none;">panexpres.com</a>
                                            <br>
                                            
                                            <span style="font-size: 16px; margin-right: 5px;">&#128222;</span> 
                                            <a href="https://wa.me/5804141869016" style="color: #ffffff; text-decoration: none; font-weight: bold;">WhatsApp Asesoría</a>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td bgcolor="#fc5e27" style="padding: 15px 30px; text-align: center;">
                            <p style="color: #ffffff; font-size: 12px; margin: 0; font-family: Arial, sans-serif;">
                                &copy; {{ date('Y') }} <strong>Pan Express</strong>. Todos los derechos reservados.
                            </p>
                        </td>
                    </tr>

                </table> <p style="font-size: 12px; color: #999999; margin-top: 20px; max-width: 600px; line-height: 1.4;">
                    Has recibido este correo porque te registraste o realizaste una compra en Pan Express. Si no deseas recibir más correos, puedes gestionar tus preferencias en nuestro sitio web.
                </p>

            </td>
        </tr>
    </table>
</body>
</html>