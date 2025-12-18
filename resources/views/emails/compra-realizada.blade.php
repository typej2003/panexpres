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
                
                <table role="presentation" width="600" cellspacing="0" cellpadding="0" border="0" style="background-color: #ffffff; border-radius: 8px; overflow: hidden; border: 1px solid #dddddd;">
                    
                    <tr>
                        <td style="padding: 40px 30px 20px 30px; text-align: center;">
                            <img src="{{ $message->embed(public_path('img/logopanexpres_color.png')) }}" alt="Logo Pan Express" width="180" style="display: block; margin: 0 auto; max-width: 180px;">
                            <hr style="width: 80%; border: 0; border-top: 4px solid #893e08; margin: 20px auto 0 auto;">
                        </td>
                    </tr>

                    <tr>
                        <td style="padding: 20px 40px 30px 40px;">
                            <h1 style="color: #333333; font-size: 24px; margin-bottom: 20px;">Hola, {{ $names }} {{ $surnames }}</h1>
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

                            <p style="font-size: 14px; color: #888888; text-align: center;">Rastrea, reprograma o cancela tu pedido desde nuestro portal.</p>
                        </td>
                    </tr>

                    <tr>
                        <td bgcolor="#333333" style="padding: 30px;">
                            <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
                                <tr>
                                    <td width="33%" align="left" style="vertical-align: middle;">
                                        <img src="{{ $message->embed(public_path('img/panexpres_logo_blanco.png')) }}" alt="Pan Expres" width="100" style="margin-bottom: 10px;">
                                        <div>
                                            <a href="#" style="text-decoration: none; color: #ffffff; margin-right: 10px;">IG</a>
                                            <a href="#" style="text-decoration: none; color: #ffffff; margin-right: 10px;">TK</a>
                                            <a href="#" style="text-decoration: none; color: #ffffff;">FB</a>
                                        </div>
                                    </td>
                                    
                                    <td width="33%" align="center" style="color: #ffffff; font-size: 12px; vertical-align: middle;">
                                        ventas@panexpres.com<br>
                                        panexpres.com
                                    </td>

                                    <td width="33%" align="right" style="vertical-align: middle;">
                                        <a href="https://wa.me/5804141869016" style="text-decoration: none;">
                                            <table role="presentation" cellspacing="0" cellpadding="0" border="0">
                                                <tr>
                                                    <td bgcolor="#25D366" style="border-radius: 50%; padding: 10px;">
                                                        <span style="color: #ffffff; font-weight: bold;">WA</span>
                                                    </td>
                                                </tr>
                                            </table>
                                        </a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                
                <p style="font-size: 12px; color: #999999; margin-top: 20px;">
                    Has recibido este correo porque realizaste una compra en {{ config('app.name') }}.
                </p>
            </td>
        </tr>
    </table>
</body>
</html>