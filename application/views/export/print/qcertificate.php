<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?=$title?></title>
        <?php
            if ( isset($css) ){
                foreach($css as $rows){
                    $exp = explode(",", $rows);
                    echo "<link type=\"{$exp[0]}\" rel=\"{$exp[1]}\" href=\"{$exp[2]}\" />\n";
                }
            }
        ?>
    </head>
    <body>
        <div id="container">
            <h4 class="title" style="margin-bottom: 0px;">TO WHOM IT MAY CONCERNED</h4>

            <div id="content" class="content">
                <div id="detail" class="content">
                    <p>I hereby certify that the recent <?=$params['header']->item_category?> shipment made for <?=$params['header']->consignee?> covered by our invoice No. <?=$params['header']->invoice_no?> had been produced according to our quality standard.</p>
                    <p>The said products were recorded in our logs as follows :</p>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>PO#</th>
                                <th>Container #</th>
                                <th>Production Date</th>
                                <th>Expiry Date</th>
                                <th>Description of Goods</th>
                                <th>Content/Carton</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach($params['detail'] as $rows) : ?>
                                <tr>
                                    <td class="data-border"><?=$rows->po_no?></td>
                                    <td class="data-border"><?=$rows->container?></td>
                                    <td class="data-border"><?=$rows->production_date?></td>
                                    <td class="data-border"><?=$rows->expired_date?></td>
                                    <td class="data-border"><?=$rows->item_name?></td>
                                    <td class="data-border"><?=$rows->carton_barcode?></td>
                                </tr>
                            <?php $no++; endforeach; ?>
                        </tbody>
                    </table>
                </div>

                <div id="signature" style="margin-top: 4%; box-sizing: border-box; content: ''; clear: both; display: table;">
                    <div style="float: left; width: 20%; text-align: center;">
                        Respectfully,
                        <div style="margin-top: 30%; font-weight: bold;"><u>Slamet Supriyadi</u></div>
                        <div>QA Manager</div>
                    </div>
                </div>

                <div id="bottom" style="margin-top: 70%;">
                    <div id="footer">
                        <div id="row">
                            <div class="box-name">Invoice No.</div>
                            <div class="box-colon">:</div>
                            <div class="box-value"><?=$params['header']->invoice_no?></div>
                        </div>

                        <div id="row">
                            <div class="box-name">QA No.</div>
                            <div class="box-colon">:</div>
                            <div class="box-value"><?=$params['header']->coa_no?></div>
                        </div>
                    </div>

                    <div id="notes" style="margin-top: 2%; border-width:2px; width:100%; border:dotted; text-align:left; border-width:0.5px; padding:5px;">
                        This Information contained in this document is confidential and propriatery information of PT. Sumber Kopi Prima. Any altering of this information 
                        <br> without express written permission of PT. Sumber Kopi Prima in expressly forbidden. <br><br> This document is valid therefore without signature.
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>