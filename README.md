# SAVE FORM REQUESTS TO TEXT

This PHP script is designed to handle both POST and GET requests and stores the received data in a text file.


## How to use

Create a html form like this:

    <form method="post" action="SFRTT.php">
        <input type="text" name="message">
        ..
        ..
        <button type="submit">Submit</button>
    </form>

## Permissions

If the PHP script does not have the necessary permissions to create the text file, manually create the file and modify its permissions to 666, as demonstrated in the example below.

1. Create the file

        sudo touch data.txt

2. Change the permissions

        sudo chmod 666 data.txt