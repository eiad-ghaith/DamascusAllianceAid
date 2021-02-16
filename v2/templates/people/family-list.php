<?php


use ChurchCRM\dto\SystemConfig;
use ChurchCRM\dto\SystemURLs;

use ChurchCRM\Authentication\AuthenticationManager;
use ChurchCRM\dto\Classification;
use ChurchCRM\Service\MailChimpService;

use ChurchCRM\dto\PeopleCustomField;
use ChurchCRM\FamilyCustomMasterQuery;
use ChurchCRM\FamilyCustomQuery;


//Set the page title
$sPageTitle = gettext(ucfirst($sMode)) . ' ' . gettext('Family List');
include SystemURLs::getDocumentRoot() . '/Include/Header.php';
/* @var $families ObjectCollection */
?>

<div class="pull-right">
  <a class="btn btn-success" role="button" href="<?= SystemURLs::getRootPath()?>/FamilyEditor.php">
    <span class="fa fa-plus" aria-hidden="true"></span><?= gettext('Add Family') ?>
  </a>
</div>
<p><br/><br/></p>
<div class="box">
    <div class="box-body">
        <table id="families" class="table table-striped table-bordered data-table" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th><?= gettext('Actions') ?></th>
                <th><?= gettext('Name') ?></th>
                <th><?= gettext('Address') ?></th>
                <th><?= gettext('Home Phone') ?></th>
                <th><?= gettext('Cell Phone') ?></th>
                <th><?= gettext('Email') ?></th>
                <th><?= gettext('Created') ?></th>
                <th><?= gettext('Edited') ?></th>
                <th><?= gettext('chose') ?></th>
                <th><?= gettext('Address Additional Info') ?></th>
            </tr>
            </thead>
            <tbody>

            <!--Populate the table with family details -->
            <?php 
            foreach ($families as $family) {
              /* @var $family ChurchCRM\Family */
    ?>
            <tr>
              <td><a href='<?= SystemURLs::getRootPath()?>/v2/family/<?= $family->getId() ?>'>
                        <span class="fa-stack">
                            <i class="fa fa-square fa-stack-2x"></i>
                            <i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
                        </span>
                    </a>
                    <a href='<?= SystemURLs::getRootPath()?>/FamilyEditor.php?FamilyID=<?= $family->getId() ?>'>
                        <span class="fa-stack">
                            <i class="fa fa-square fa-stack-2x"></i>
                            <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                        </span>
                    </a></td>
                <td> <?= $family->getName() ?></td>
                <td> <?= $family->getAddress() ?></td>
                <td> <?= $family->getHomePhone() ?></td>
                <td> <?= $family->getCellPhone() ?></td>
                <td> <?= $family->getEmail() ?></td>
                <td> <?= date_format($family->getDateEntered(), SystemConfig::getValue('sDateFormatLong')) ?></td>
                <td> <?= date_format($family->getDateLastEdited(), SystemConfig::getValue('sDateFormatLong')) ?></td>
               <!-- todo: Select custom list options from an array -->
               <!-- todo: Select custom list for Address Additional Info -->
               <!-- todo: Select custom list for Additional Info -->
               <!-- todo: Select custom list for Team Info -->
               <!-- todo: Select custom list for Ref -->
               <!-- todo: Select custom list for Membership Status -->
                <?php
                    $allFamilyCustomFields = FamilyCustomMasterQuery::create()->find();

                  $rawQry =  FamilyCustomQuery::create();
                  foreach ($allFamilyCustomFields as $customfield ) {
                    $rawQry->withColumn($customfield->getField());
                }

                $thisFamilyCustomFields = $rawQry->findOneByFamId($family->getId());
                if ($thisFamilyCustomFields) {
                  $familyCustom = [];
 
                  foreach ($allFamilyCustomFields as $customfield ) {

                        $value = $thisFamilyCustomFields->getVirtualColumn($customfield->getField());
            
                        if (!empty($value)) {

                            $item = new PeopleCustomField($customfield, $value);
                            ?>
                            <td> <?= $item->getFormattedValue() ?></td>
                            <?php
                          }
                  }
              }

            ?>

                <?php
               
}
                ?>
            </tr>
            </tbody>
        </table>
    </div>
</div>

<script nonce="<?= SystemURLs::getCSPNonce() ?>" >
  $(document).ready(function () {
    $('#families').DataTable(window.CRM.plugin.dataTable);
  });
</script>

<?php
require SystemURLs::getDocumentRoot() .  '/Include/Footer.php';
?>
