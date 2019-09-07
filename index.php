<?php
defined('_JEXEC') or die;
$this->setGenerator(null);
?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<!--[if lt IE 9]> 
 <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script> 
<![endif]-->
<jdoc:include type="head" />
<link rel="stylesheet" href="templates/<?php echo $this->template ?>/css/template.css" type="text/css" />
<link href="templates/<?php echo $this->template ?>/favicon.ico" rel="shortcut icon" type="image/x-icon" />
</head>
<body>
    <header>
        <div id="headerContainer">
            <div id="logo">
                <div class="logoImg"><a href="/"><img src="templates/<?php echo $this->template ?>/images/logo.png" alt="Отопительные системы"/></a></div>
                <jdoc:include type="modules" name="companyname" style="none" />
            </div>
            <?php if($this->countModules('telephone')):?>
            <div id="telphone">
                <div class="phnImg"><img src="templates/<?php echo $this->template ?>/images/phone.png" alt="Контактный телефон"/></div>
                <jdoc:include type="modules" name="telephone" style="none" />
            </div>
            <?php endif; ?>
            <?php if($this->countModules('emailpos')):?>
            <div id="email">
                <div class="emailImg"><img src="templates/<?php echo $this->template ?>/images/letter.png" alt="Email img"/></div>
                <jdoc:include type="modules" name="emailpos" style="none" />
            </div>
            <?php endif; ?>
            <?php if($this->countModules('locationpos')):?>
            <div id="location">
                <div class="locationImg"><img src="templates/<?php echo $this->template ?>/images/location.png" alt="Адресс предприятия"/></div>
                <jdoc:include type="modules" name="locationpos" style="none" />
            </div>
            <?php endif; ?>
        </div>
    </header>

    <div id="menuContainer" class="topmenu" onclick="this.className = (this.className == 'topmenu' ? 'mobilemenu' : 'topmenu')"><div id="menu"><jdoc:include type="modules" name="menu" style="none" /></div></div>

    <div class="contentContainer">
        <div id="text">
            <?php if($this->countModules('breadcrumbs')):?>
            <div id="breadcrumbs"><jdoc:include type="modules" name="breadcrumbs" style="none" /></div>
            <?php endif; ?>
            <jdoc:include type="message" />
            <jdoc:include type="component" />
            <?php if($this->countModules('partners')):?>
            <div id="partnersContainer">
                <jdoc:include type="modules" name="partners" style="none" />
            </div>
            <?php endif; ?>
        </div>
        <?php if($this->countModules('sidebar')):?>
        <div id="sidebar"><jdoc:include type="modules" name="sidebar" style="xhtml" />
        <?php endif; ?>
    </div>
    </div>

    <footer>
        <div id="footerContainer">
            <?php if($this->countModules('telephone')):?>
            <div id="telphone">
                <div class="phnImg"><img src="templates/<?php echo $this->template ?>/images/phone.png" alt="Контактный телефон"/></div>
                <jdoc:include type="modules" name="telephone" style="none" />
            </div>
            <?php endif; ?>
            <?php if($this->countModules('emailpos')):?>
            <div id="email">
                <div class="emailImg"><img src="templates/<?php echo $this->template ?>/images/letter.png" alt="Email img"/></div>
                <jdoc:include type="modules" name="emailpos" style="none" />
            </div>
            <?php endif; ?>
            <?php if($this->countModules('locationpos')):?>
            <div id="location">
                <div class="locationImg"><img src="templates/<?php echo $this->template ?>/images/location.png" alt="Адресс предприятия"/></div>
                <jdoc:include type="modules" name="locationpos" style="none" />
            </div>
            <?php endif; ?>
            <?php if($this->countModules('companyinfo')):?>
            <div id="companyInfoContainer">
                <jdoc:include type="modules" name="companyinfo" style="none" />
            </div>
            <?php endif; ?>
        </div>
        <div id="bottomLine">
            <span>&#169; Copyright <?php echo date('Y'); ?></span>
        </div>
    </footer>

    <!-- Js Scripts -->
    <script type="text/javascript">
    console.log("Hello from JS");
    </script>
</body>
</html>