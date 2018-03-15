<h3>
    Employee Details.
</h3>
<table>
    <tr>
        <td>Employee Id</td>
        <td><?= $employee['user_id'] ?></td>
    </tr>
    <tr>
        <td>First Name</td>
        <td><?= $employee['first_name'] ?></td>
    </tr>
    <tr>
        <td>Last Name</td>
        <td><?= $employee['last_name'] ?></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><?= $employee['email'] ?></td>
    </tr>
    <tr>
        <td>Role</td>
        <td><?= $employee['role'] ?></td>
    </tr>
    <tr>
        <td>Department</td>
        <td><?= $employee['department'] ?></td>
    </tr>
    <tr>
        <td>Age</td>
        <td><?= $employee['age'] ?></td>
    </tr>
    <tr>
        <td>Street Address 1</td>
        <td><?= $employee['street_address_1'] ?></td>
    </tr>
    <tr>
        <td>Street Address 2</td>
        <td><?= $employee['street_address_2'] ?></td>
    </tr>
    <tr>
        <td>Suburb</td>
        <td><?= $employee['suburb'] ?></td>
    </tr>
    <tr>
        <td>State</td>
        <td><?= $employee['state'] ?></td>
    </tr>
    <tr>
        <td>Postcode</td>
        <td><?= $employee['postcode'] ?></td>
    </tr>
    <tr>
        <td>Country</td>
        <td><?= $employee['country'] ?></td>
    </tr>
</table>

<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}

h3 {
    width: 500px;
}
</style>
