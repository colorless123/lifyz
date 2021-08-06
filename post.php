<div class="post">
    <div class="post<?= "$result[status]"; ?>">
        <div class="status<?= "$result[status]"; ?>">
            <?php
            if ("$result[status]" == 0) {
                print "заявка рассматривается"; ?>
                <style>
                    .post0 {
                        background-color: rgb(193, 221, 231);
                    }

                    .datetime0,
                    .status0 {
                        background-color: rgba(100, 148, 237, 0.521);
                    }
                </style>
            <?php
            }
            if ("$result[status]" == 1) {
                print "заявка выполнена"; ?>
                <style>
                    .post1 {
                        background-color: rgb(193, 231, 195);
                    }

                    .datetime1,.status1 {
                        background-color: rgba(162, 237, 100, 0.521);
                    }
                </style>
            <?php
            }
            if ("$result[status]" == 2) {
                print "заявка отклонена"; ?>
                <style>
                    .post2 {
                        background-color: rgb(231, 193, 193);
                    }

                    .datetime2,.status2 {
                        background-color: rgba(237, 100, 100, 0.521);
                    }
                </style>
            <?php
            }
            ?>
        </div>
        <a href="allpost.php"><?php print "$result[postname]" ?></a>
        <div class="text">
            <p><?php print "$result[text]" ?></p>
        </div>
        <div class="datetime">
            <div class="datetime<?= "$result[status]"; ?>">
                <?php print "$result[email]" ?><br>
                <?php print "$result[date]" ?>
            </div>
        </div>
    </div>
</div>