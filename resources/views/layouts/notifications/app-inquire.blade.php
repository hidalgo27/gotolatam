<div class="container">
    <div style="font-family:Lato,sans-serif;font-size:15px;color:#666666" marginheight="0" marginwidth="0">
        <table cellspacing="0" cellpadding="0" border="0" bgcolor="#ffffff" align="center" width="100%" color="#666666">
            <tbody>
            <tr>
                <td bgcolor="#ffffff" width="100%" valign="top">
                    <table cellspacing="0" cellpadding="0" border="0" bgcolor="#ffffff" align="center" width="600">
                        <tbody>
                        <tr bgcolor="#ffffff">
                            <td valign="top" style="padding:10px 35px 0 35px;color:#ffffff">
                                <img class="CToWUd" width="350" alt="logo gotoperu" src="https://gotolatam.s3.us-west-1.amazonaws.com/logos/logo-gotoperu-black.png" style="vertical-align:top;max-width:220px">
                            </td>

                        </tr>
                        @yield('content')
                        </tbody>
                    </table>
                </td>
            </tr>
            </tbody>
        </table>
        <br>
        <table cellspacing="0" cellpadding="0" border="0" bgcolor="#f6f6f6" align="center" width="100%" height="50">
            <tbody>
            <tr>
                <td style="text-align:center;font-size:12px;padding:5px 15px;color:#999999">
                    <p>
                        {{__('message.msg_default')}}
                    </p>
                    <p><a href="https://gotolatam.com" style="color:blue" target="_blank">GOTOLATAM</a></p>
                </td>
                <td>
                    <img class="CToWUd" width="250" alt="logo gotoperu" src="https://gotolatam.s3.us-west-1.amazonaws.com/logos/logo-gotoperu-black.png" style="vertical-align:top;max-width:220px">
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
