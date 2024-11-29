<?= $this->extend('layouts/admin_layout') ?>

<?= $this->section('head') ?>
    <h1>Detail Anggota</h1>
    <p>UID: <?= $member['uid']; ?></p>
    <table>
        <tr>
            <th>Nama Lengkap</th>
            <td><?= $member['first_name'] . ' ' . $member['last_name']; ?></td>
        </tr>
        <tr>
            <th>Member</th>
            <td><?= $member['id_anggota']; ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?= $member['email']; ?></td>
        </tr>
        <tr>
            <th>Nomor Telepon</th>
            <td><?= $member['phone']; ?></td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td><?= $member['address']; ?></td>
        </tr>
        <tr>
            <th>Tanggal Lahir</th>
            <td><?= \CodeIgniter\I18n\Time::parse($member['date_of_birth'], locale: 'id')->toLocalizedString('d MMMM Y'); ?></td>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <td><?= $member['gender'] == 'Male' ? 'Laki-laki' : 'Perempuan'; ?></td>
        </tr>
    </table>
<?= $this->endSection() ?>
