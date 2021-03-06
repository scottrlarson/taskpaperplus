<!DOCTYPE html>

<html>
    
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>
        <?php echo \tpp\config('title'); ?>
    </title>

    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/print.css" media="print" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <script type="text/javascript" src="./lib/jquery.js"></script>
    <script type="text/javascript" src="./lib/jquery-ui-sortable.js"></script>
    <script type="text/javascript" src="./lib/jquery.jeditable.js"></script>
    <script type="text/javascript" src="./lib/jquery.address.js"></script>
    <script type="text/javascript" src="./lib/jquery.hotkeys.js"></script>
    <script type="text/javascript" src="./lib/taboverride.js"></script>
    <script type="text/javascript" src="./lib/jquery.taboverride.js"></script>
    <script type="text/javascript" src="./lib/jquery.placeholder.js"></script>
    <script type="text/javascript" src="./js/client.js"></script>

    <script id="jslang" type="application/json"><?php echo $this->jslang; ?></script>
</head>


<body>
    <?php include('tpl/banner.tpl.php'); ?>
    <div id="indicator"></div>

    <div id="frame">

        <div id="tabs">
            <?php echo $this->tabs; ?>
        </div>

        <div id="content">

            <div id="header">
                <?php echo $this->header; ?>
            </div>

            <div class="columns">
                <div class="projects column">
                    <h1><?php echo \tpp\lang('project_header'); ?></h1>
                    <div id="projects">
                        <?php echo $this->projects; ?>
                    </div>
                </div>

                <div class="tasks column">
                    <div id="view-tasks">
                        <?php include('tpl/indicators.tpl.php'); ?>
                        <div id="task-list">
                            <?php echo $this->tasks; ?>
                        </div>
                    </div>
                    
                    <div id="edit-tasks">
                        <?php include('tpl/edittasks.tpl.php'); ?>
                        <?php include('tpl/cheatsheet.tpl.php'); ?>
                    </div>
                </div>

                <div class="meta column">
                    <h1><?php echo \tpp\lang('filter_header'); ?></h1>
                    <ul class="filters">
                        <?php echo $this->filters; ?>
                    </ul>
                    <h1><?php echo \tpp\lang('tag_header'); ?></h1>
                    <ul id="tags">
                        <?php echo $this->tags; ?>
                    </ul>
                </div>
            </div>

            <div id="footer">
                <?php echo $this->footer; ?>
            </div>
            
        </div>

        <div class="version">
            <span>Version: <?php echo \tpp\config('version_number'); ?></span>
            <?php if (SHOW_ERRORS) { ?>
                <span id="purge-session">Clear Session!</span>
                <span id="purge-cache">Clear Cache!</span>
            <?php } ?>
        </div>
    </div>

    <input id="page-address"     type="hidden" value="<?php echo $this->page_address; ?>" />
    <input id="task-prefix"      type="hidden" value="<?php echo $this->task_prefix; ?>" />
    <input id="task-buttons-tpl" type="hidden" value='<?php echo $this->task_buttons; ?>' />
    <input id="debug-mode"       type="hidden" value='<?php echo $this->debug_mode; ?>' />
    <input id="insert_pos"       type="hidden" value='<?php echo $this->insert_pos; ?>' />
    <input id="note_state"       type="hidden" value='<?php echo $this->note_state; ?>' />
</body>
</html>
