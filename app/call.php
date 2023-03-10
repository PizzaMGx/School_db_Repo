<?php
$data = json_decode(file_get_contents('php://input'), true);

myPhpFunction($data['field'],$data['order'],$data['fields'],$data['field_search'],$data['value']);
function myPhpFunction($field=NULL, $order=NULL, $fields=NULL, $field_search=NULL, $value=NULL) {
    echo $field_search;
    echo $value;
# Connect to DB
$conn = mysqli_connect("db", "testuser", "password", "testdb");
# Get the fields
$result = mysqli_query($conn, "SHOW COLUMNS FROM Sum_of_Tuitionfee_in");
$columns = array();

if (empty($fields)){
    while ($row = mysqli_fetch_assoc($result)) {
        $columns[] = $row['Field'];
    }
    $columns = implode(',', $columns);
}else {
    $columns = $fields;
}


# Declare the filter Variables
$limit = 10;
# Call the DB
if (empty($field) || empty($order)){
    $sql = "SELECT $columns FROM `Sum_of_Tuitionfee_in` LIMIT $limit";
}else {
    $sql = "SELECT $columns FROM `Sum_of_Tuitionfee_in` order by $field $order LIMIT $limit";
}
if (!empty($field_search) && !empty($value)){
    $sql = "SELECT $columns FROM `Sum_of_Tuitionfee_in` where $field_search in ('$value') LIMIT $limit";
}
echo $sql;

$result = mysqli_query($conn, $sql);
$column_array = explode(',', $columns);

# Create the table Fields
echo "<table>";
echo "<tr>";
foreach ($column_array as $column) {
    $column = trim($column);
    echo "<th>" . $column . "</th>";
}
echo "<tr>";

# Fill the Rows
while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    foreach ($column_array as $column) {
        $column = trim($column);
        echo "<td>" . $row[$column] . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

$conn->close();
}
?>