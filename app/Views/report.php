<?= $this->extend('layouts/user_template') ?>

<?= $this->section('content') ?>

<div class="container-fluid">
    <h2 class="mb-10">Test Report</h2>

    <h5 class="mb-3">Personality Test</h5>

    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th>No.</th>
                <th>Date</th>
                <th>Name</th>
                <th>IE</th>
                <th>SN</th>
                <th>TF</th>
                <th>JP</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($psy as $psy) {
                ?>
                <tr>
                    <td>
                        <?= $no++ ?>
                    </td>
                    <td>
                        <?= $psy['date'] ?>
                    </td>
                    <td>
                        <?= $psy['name'] ?>
                    </td>
                    <td>
                        <?php
                        $IE = $psy['ie'];
                        if ($IE >= 10 && $IE < 25) {
                            echo "Extrovert";
                        } elseif ($IE > 25 && $IE <= 40) {
                            echo "Introvert";
                        } else {
                            echo "Error";
                        }
                        ?>
                    </td>
                    <td>
                        <?php
                        $SN = $psy['sn'];
                        if ($SN >= 10 && $SN < 25) {
                            echo "Intuition";
                        } elseif ($SN > 25 && $SN <= 40) {
                            echo "Sensing";
                        } else {
                            echo "Error";
                        }
                        ?>
                    </td>
                    <td>
                        <?php
                        $TF = $psy['tf'];
                        if ($TF >= 10 && $TF < 25) {
                            echo "Feeling";
                        } elseif ($TF > 25 && $TF <= 40) {
                            echo "Thinking";
                        } else {
                            echo "Error";
                        }
                        ?>
                    </td>
                    <td>
                        <?php
                        $JP = $psy['jp'];
                        if ($JP >= 10 && $JP < 25) {
                            echo "Perceiving";
                        } elseif ($JP > 25 && $JP <= 40) {
                            echo "Judging";
                        } else {
                            echo "Error";
                        }
                        ?>
                    </td>
                    <td>
                        <form action="<?= base_url('psy/' . $psy['id']) ?>" method="post"
                            onsubmit="return confirm('Are you sure?');">
                            <input type="hidden" name="_method" value="DELETE">
                            <?= csrf_field() ?>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</div>

<?= $this->endSection() ?>