<style>
    .container {
        border: 1px solid #ccc;
        padding: 20px;
        border-radius: 8px;
        max-width: 400px;
        margin: 0 auto;
        text-align: center;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 8px;
    }

    th {
        background-color: #f2f2f2;
    }
</style>

<div class="container">
    <h2>Logout Confirmation</h2>
    <p>Apakah anda yakin ingin keluar?</p>

    <table>
        <tr>
            <td>
                <form action="<?= BASEURL; ?>/backsite/logout/logout" method="post">
                    <button type="submit">Yes, Logout</button>
                </form>
            </td>
        </tr>
        <tr>
            <td>
                <a href="<?= BASEURL; ?>/backsite/dashboard">Tetap dihalaman</a>
            </td>
        </tr>
    </table>
</div>
