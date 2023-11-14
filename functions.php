<?php

//fonctions 'crud'
function createAddress(array $data)
{
    global $conn;

    // Prepare the SQL query with explicit column names and use the correct table name
    $query = "INSERT INTO adresse (street, street_nb, type, city, zipcode) VALUES (?, ?, ?, ?, ?)";

    // Check if the statement is prepared successfully
    if ($stmt = mysqli_prepare($conn, $query)) {

        // Bind parameters to the prepared statement
        mysqli_stmt_bind_param(
            $stmt,
            "sssss",
            $data['street'],
            $data['street_nb'],
            $data['type'],
            $data['city'],
            $data['zipcode']
        );

        // Execute the query
        $result = mysqli_stmt_execute($stmt);

        // Close the prepared statement
        mysqli_stmt_close($stmt);
    }
}

function getAllAddresses()
{
    global $conn;

    // Fetch all addresses from the 'adresse' table
    $result = mysqli_query($conn, "SELECT * FROM adresse");

    $data = [];
    // Iterate through the result set and store data in an array
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }

    return $data;
}

function getAddressById(int $id)
{
    global $conn;

    // Fetch an address by ID from the 'adresse' table
    $result = mysqli_query($conn, "SELECT * FROM adresse WHERE id = " . $id);

    // Retrieve the data as an associative array
    $data = mysqli_fetch_assoc($result);

    return $data;
}

function updateAddress(array $data)
{
    global $conn;

    // Prepare the SQL query for updating an address
    $query = "UPDATE adresse SET street = ?, street_nb = ?, type = ?, city = ?, zipcode = ? WHERE id = ?";

    // Check if the statement is prepared successfully
    if ($stmt = mysqli_prepare($conn, $query)) {

        // Bind parameters to the prepared statement
        mysqli_stmt_bind_param(
            $stmt,
            "sssssi",
            $data['street'],
            $data['street_nb'],
            $data['type'],
            $data['city'],
            $data['zipcode'],
            $data['id']
        );

        // Execute the query
        $result = mysqli_stmt_execute($stmt);

        // Close the prepared statement
        mysqli_stmt_close($stmt);
    }
}

function deleteAddress(int $id)
{
    global $conn;

    // Prepare the SQL query for deleting an address
    $query = "DELETE FROM adresse WHERE id = ?";

    // Check if the statement is prepared successfully
    if ($stmt = mysqli_prepare($conn, $query)) {

        // Bind parameters to the prepared statement
        mysqli_stmt_bind_param(
            $stmt,
            "i",
            $id
        );

        // Execute the query
        $result = mysqli_stmt_execute($stmt);

        // Close the prepared statement
        mysqli_stmt_close($stmt);
    }
}

?>
