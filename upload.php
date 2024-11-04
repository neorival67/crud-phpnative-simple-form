<html>
    <head>
        <title> pertemuan 12</title>
    </head>
    <body>
        <h2>Form Login</h2>
        <form method="post" action="process_upload.php"  enctype="multipart/form-data">
            <table>
                <tr>
                    <td>file</td>
                    <td>:</td>
                    <td><input type="file" name="file_upload"></td>
                </tr>
                <tr>
                    <td> deskripsi </td>
                    <td>:</td>
                    <td><input type="text" name="deskripsi"></td>
                </tr>
                <tr>
                    <td><input name="upload" type="submit" id="upload" value="Upload"></td>
                    <td><input name="cancel" type="reset" id="cancel"  value="batal"></td>
                </tr>
            </table>
        </form>
    </body>
</html>