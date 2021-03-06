<section class="breadcrumb breadcrumb_bg align-items-center">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-sm-6">
                    <div class="breadcrumb_tittle">
                        <p>Accueil<span> / FAQ</p>
                        <h2>FAQ</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
<div class="container">
    <div class="spacer" style="height: 80px;"></div>

    <div class="panel">
        <div class="container">
            <div class="page-header">
                <h1><?= $Lang->get("FAQ") ?></h1>
            </div>
        </div>
        <div class="panel-body">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <?= (empty($faqs)) ? "<p>Aucune FAQ pour le moment</p>" : ""?>
                <?php foreach($faqs as $k=>$v): $v = current($v); ?>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading-<?= $v['id'] ?>">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-<?= $v['id'] ?>" aria-expanded="true" aria-controls="collapse-<?= $v['id'] ?>">
                                    <?= $v['question'] ?>
                                </a>
                            </h4>
                        </div>
                        <div id="collapse-<?= $v['id'] ?>" class="panel-collapse collapse<?= ($k == 0) ? " in" : "" ?>" role="tabpanel" aria-labelledby="heading-<?= $v['id'] ?>">
                            <div class="panel-body">
                                <?= $v['answer'] ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
