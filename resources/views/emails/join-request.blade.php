
<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
    <div marginheight="0" marginwidth="0">
        <table style="width:400px;height:100%;" cellspacing="0" cellpadding="0" border="0">
                <tbody>
                    <tr>
                        <td valign="top" align="">Name:</td>
                        <td valign="top" align="">{{$data['data']['lm_name']}}</td>
                    </tr>
                    <tr>
                        <td valign="top" align="">Email:</td>
                        <td valign="top" align="">{{$data['data']['lm_email']}}</td>
                    </tr>
                     <tr>
                        <td valign="top" align="">Phone Number:</td>
                        <td valign="top" align="">{{$data['data']['lm_phone']}}</td>
                    </tr>
                    <tr>
                        <td valign="top" align="">Address:</td>
                        <td valign="top" align="">{{$data['data']['lm_address']}}</td>
                    </tr>
                    <tr>
                        <td valign="top" align="">Occupation:</td>
                        <td valign="top" align="">{{$data['data']['lm_occupation']}}</td>
                    </tr>
                    <tr>
                        <td valign="top" align="">Household Income:</td>
                        <td valign="top" align="">{{$data['data']['lm_income']}}</td>
                    </tr>
                    <tr>
                        <td valign="top" align="">Social Security Number:</td>
                        <td valign="top" align="">{{$data['data']['lm_security']}}</td>
                    </tr>
                    <tr>
                        <td valign="top" align="">Marital Status:</td>
                        <td valign="top" align="">{{$data['data']['lm_mstatus']}}</td>
                    </tr>
                     <tr>
                        <td valign="top" align="">Are you an accredited or sophisticated investor? :</td>
                        <td valign="top" align="">{{$data['data']['lm_investor']}}</td>
                    </tr>
                    <tr>
                        <td valign="top" align="">Have you invested in stocks, bonds, startups, mutual funds, real estate etc in the past? :</td>
                        <td valign="top" align="">{{$data['data']['lm_invested']}}</td>
                    </tr>
                    <tr>
                        <td valign="top" align="">How much can you invest? :</td>
                        <td valign="top" align="">{{$data['data']['lm_invest']}}</td>
                    </tr>
                    <tr>
                        <td valign="top" align="">When are you looking to invest? :</td>
                        <td valign="top" align="">{{$data['data']['lm_when']}}</td>
                    </tr>
                    <tr>
                        <td valign="top" align="">How did you hear about us? :</td>
                        <td valign="top" align="">{{ implode(',',$data['data']['lm_hear'])}}</td>
                    </tr>
                    <tr>
                        <td valign="top" align="">Which country do you reside in? :</td>
                        <td valign="top" align="">{{$data['data']['lm_country']}}</td>
                    </tr>
                    <tr>
                        <td valign="top" align="">Any additional information we should know? :</td>
                        <td valign="top" align="">{{$data['data']['lm_additional']}}</td>
                    </tr>
                </tbody> 
        </table>        
    </div>
</body>
</html>