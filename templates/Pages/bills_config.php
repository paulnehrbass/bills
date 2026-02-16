<?php
use Cake\Core\Configure;

$billsConfig = Configure::read('Bills');
?>

<h1>Bills Config Test</h1>

<p>Hier siehst du die aktuellen Parameter aus deiner <code>bills.php</code> Config-Datei.</p>

<?php if (!empty($billsConfig)): ?>
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
        <tr>
            <th>Key</th>
            <th>Value</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($billsConfig as $key => $value): ?>
            <tr>
                <td><?= h($key) ?></td>
                <td>
                    <?php
                    if (is_array($value)) {
                        echo '<pre>' . h(print_r($value, true)) . '</pre>';
                    } else {
                        echo h($value);
                    }
                    ?>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p><em>Keine Bills-Konfiguration gefunden.</em></p>
<?php endif; ?>
