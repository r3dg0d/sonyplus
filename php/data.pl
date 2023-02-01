$file = fopen("users.csv", "r");
while ($data = fgetcsv($file)) {
    if ($data[1] == $email) {
        if (password_verify($password, $data[2])) {
            // Login success
        } else {
            // Login failed
        }
        break;
    }
}
fclose($file);
