<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

  <title>ImobiBrasil Sites para Imobiliárias e Corretores</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="description" content="ImobiBrasil - Sites para Imobiliárias e Corretores - www.imobibrasil.com.br">
  <meta name="keywords" content="ImobiBrasil, Sites para Imobiliárias e Corretores, www.imobibrasil.com.br">
  <meta name="author" content="ImobiBrasil www.imobibrasil.com.br">

  <meta name="copyright" content="Original content copyright (c);">
  <meta name="robots" content="noindex,nofollow">
  <meta http-equiv="pragma" content="no-cache">
  <meta name="language" content="pt-br">

  <link rel="shortcut icon" href="imagens/imobibrasil.ico">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet" type="text/css">
  <link href="css/font-awesome.min.css" type="text/css" rel="stylesheet">
  <link href="css/style.css?v=5" rel="stylesheet" type="text/css">
  <link href="css/styles.css?v=4" rel="stylesheet" type="text/css">

  <script language="javascript" src="js/jquery-3.3.1.min.js"></script>




  <!--
	<script type="text/javascript">
        (function(c,l,a,r,i,t,y){
            c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
            t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
            y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
        })(window, document, "clarity", "script", "5oeuar9u5k");
    </script>
    -->

  <link href="css/config.css" rel="stylesheet" type="text/css">
  <style>
    .campo {
      height: auto;
      padding: 10px;
      font-size: 14px;
    }

    .color {
      padding: 10px;
      border: 0;
      cursor: hand;
    }

    .icone-imgs {
      color: #00F;
      font-size: 18px;
    }
  </style>
  <style>
    .cxEnvioImg {
      width: 100%;
      border: 1px solid #CCC;
      padding: 10px;
      margin-bottom: 30px;
      box-shadow: 0 1px 10px 0 rgba(0, 0, 0, 0.2);
    }

    .cxEnvioImg:hover {
      border: 1px solid #2794df;
    }

    .cxEnvioImg .cxTexto1 {
      width: 100%;
      display: block;
      font-weight: bold;
      margin-bottom: 15px;
    }

    .cxEnvioImg .cxEnvioUp {
      width: 100%;
      display: block;
      margin-bottom: 10px;
    }

    .cxEnvioImg .cxEnvioImg {
      width: 400px;
      height: auto;
      padding: 15px;
      text-align: center;
      background-color: #e1e1e1;
      border: 0px;
    }

    .cxEnvioImg .cxEnvioImg .cxEnvioTexto1 {
      display: block;
      margin-bottom: 15px;
      border-bottom: px solid #e1e1e1;
    }

    .cxEnvioImg img {
      max-width: 300px;
      max-height: 150px;
    }

    #caixa_alertas {
      display: none;
    }

    .fonte_itens_alerta {
      color: #ffffff;
      height: 40px;
      border: 1px solid #B71C1C;
      font-size: 15px;
      text-align: center;
      background-color: #E53935
    }
  </style>


  <script type="text/javascript" src="Scripts/paletacor/jscolor.js"></script>

  <script language="javascript">
    function visualiza_imagens(vet_imagens, seletor) {
      var $slctModelo = $(seletor); // 'select[name=modelo]'

      var $parentModelo = $slctModelo.parent();

      $('#external_link').remove();
      $slctModelo.on('change', function() {
        var valor = parseInt($(this).val(), 10);

        if (isNaN(valor)) { //verifica valores que não são imagens
          // console.log( valor[1] );
          $('#external_link').remove();
          return;
        }

        $('#external_link').remove();
        $slctModelo.after("<a style='margin: 0px 35px; padding-top: 7px; ' target='_blank' id='external_link' title='Visualizar'><i class='fa fa-external-link icone-imgs'></i></a>")

        // console.log(valor);
        $('#external_link').attr('href', 'https://admin01.imobibrasil.net/' + vet_imagens[valor]);
        $('#external_link').on('click', function(e) {
          e.preventDefault();
          popup('https://admin01.imobibrasil.net/' + vet_imagens[valor]);
        })

      });

      $slctModelo.trigger('change');
    }

    function popup(url) {
      newwindow = window.open(url, 'name', 'height=400,width=600,top=100,left=50');
      if (window.focus) {
        newwindow.focus()
      }
      return false;
    }
  </script>

  <script language="javascript" src="js/jquery-3.3.1.min.js"></script>
  <style>
    .swal2-popup.swal2-toast {
      box-sizing: border-box;
      grid-column: 1/4 !important;
      grid-row: 1/4 !important;
      grid-template-columns: min-content auto min-content;
      padding: 1em;
      overflow-y: hidden;
      background: #fff;
      box-shadow: 0 0 1px rgba(0, 0, 0, .075), 0 1px 2px rgba(0, 0, 0, .075), 1px 2px 4px rgba(0, 0, 0, .075), 1px 3px 8px rgba(0, 0, 0, .075), 2px 4px 16px rgba(0, 0, 0, .075);
      pointer-events: all
    }

    .swal2-popup.swal2-toast>* {
      grid-column: 2
    }

    .swal2-popup.swal2-toast .swal2-title {
      margin: .5em 1em;
      padding: 0;
      font-size: 1em;
      text-align: initial
    }

    .swal2-popup.swal2-toast .swal2-loading {
      justify-content: center
    }

    .swal2-popup.swal2-toast .swal2-input {
      height: 2em;
      margin: .5em;
      font-size: 1em
    }

    .swal2-popup.swal2-toast .swal2-validation-message {
      font-size: 1em
    }

    .swal2-popup.swal2-toast .swal2-footer {
      margin: .5em 0 0;
      padding: .5em 0 0;
      font-size: .8em
    }

    .swal2-popup.swal2-toast .swal2-close {
      grid-column: 3/3;
      grid-row: 1/99;
      align-self: center;
      width: .8em;
      height: .8em;
      margin: 0;
      font-size: 2em
    }

    .swal2-popup.swal2-toast .swal2-html-container {
      margin: .5em 1em;
      padding: 0;
      overflow: initial;
      font-size: 1em;
      text-align: initial
    }

    .swal2-popup.swal2-toast .swal2-html-container:empty {
      padding: 0
    }

    .swal2-popup.swal2-toast .swal2-loader {
      grid-column: 1;
      grid-row: 1/99;
      align-self: center;
      width: 2em;
      height: 2em;
      margin: .25em
    }

    .swal2-popup.swal2-toast .swal2-icon {
      grid-column: 1;
      grid-row: 1/99;
      align-self: center;
      width: 2em;
      min-width: 2em;
      height: 2em;
      margin: 0 .5em 0 0
    }

    .swal2-popup.swal2-toast .swal2-icon .swal2-icon-content {
      display: flex;
      align-items: center;
      font-size: 1.8em;
      font-weight: bold
    }

    .swal2-popup.swal2-toast .swal2-icon.swal2-success .swal2-success-ring {
      width: 2em;
      height: 2em
    }

    .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line] {
      top: .875em;
      width: 1.375em
    }

    .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left] {
      left: .3125em
    }

    .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right] {
      right: .3125em
    }

    .swal2-popup.swal2-toast .swal2-actions {
      justify-content: flex-start;
      height: auto;
      margin: 0;
      margin-top: .5em;
      padding: 0 .5em
    }

    .swal2-popup.swal2-toast .swal2-styled {
      margin: .25em .5em;
      padding: .4em .6em;
      font-size: 1em
    }

    .swal2-popup.swal2-toast .swal2-success {
      border-color: #a5dc86
    }

    .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line] {
      position: absolute;
      width: 1.6em;
      height: 3em;
      transform: rotate(45deg);
      border-radius: 50%
    }

    .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=left] {
      top: -0.8em;
      left: -0.5em;
      transform: rotate(-45deg);
      transform-origin: 2em 2em;
      border-radius: 4em 0 0 4em
    }

    .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=right] {
      top: -0.25em;
      left: .9375em;
      transform-origin: 0 1.5em;
      border-radius: 0 4em 4em 0
    }

    .swal2-popup.swal2-toast .swal2-success .swal2-success-ring {
      width: 2em;
      height: 2em
    }

    .swal2-popup.swal2-toast .swal2-success .swal2-success-fix {
      top: 0;
      left: .4375em;
      width: .4375em;
      height: 2.6875em
    }

    .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line] {
      height: .3125em
    }

    .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=tip] {
      top: 1.125em;
      left: .1875em;
      width: .75em
    }

    .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=long] {
      top: .9375em;
      right: .1875em;
      width: 1.375em
    }

    .swal2-popup.swal2-toast .swal2-success.swal2-icon-show .swal2-success-line-tip {
      animation: swal2-toast-animate-success-line-tip .75s
    }

    .swal2-popup.swal2-toast .swal2-success.swal2-icon-show .swal2-success-line-long {
      animation: swal2-toast-animate-success-line-long .75s
    }

    .swal2-popup.swal2-toast.swal2-show {
      animation: swal2-toast-show .5s
    }

    .swal2-popup.swal2-toast.swal2-hide {
      animation: swal2-toast-hide .1s forwards
    }

    .swal2-container {
      display: grid;
      position: fixed;
      z-index: 1060;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      box-sizing: border-box;
      grid-template-areas: "top-start     top            top-end" "center-start  center         center-end" "bottom-start  bottom-center  bottom-end";
      grid-template-rows: minmax(min-content, auto) minmax(min-content, auto) minmax(min-content, auto);
      height: 100%;
      padding: .625em;
      overflow-x: hidden;
      transition: background-color .1s;
      -webkit-overflow-scrolling: touch
    }

    .swal2-container.swal2-backdrop-show,
    .swal2-container.swal2-noanimation {
      background: rgba(0, 0, 0, .4)
    }

    .swal2-container.swal2-backdrop-hide {
      background: rgba(0, 0, 0, 0) !important
    }

    .swal2-container.swal2-top-start,
    .swal2-container.swal2-center-start,
    .swal2-container.swal2-bottom-start {
      grid-template-columns: minmax(0, 1fr) auto auto
    }

    .swal2-container.swal2-top,
    .swal2-container.swal2-center,
    .swal2-container.swal2-bottom {
      grid-template-columns: auto minmax(0, 1fr) auto
    }

    .swal2-container.swal2-top-end,
    .swal2-container.swal2-center-end,
    .swal2-container.swal2-bottom-end {
      grid-template-columns: auto auto minmax(0, 1fr)
    }

    .swal2-container.swal2-top-start>.swal2-popup {
      align-self: start
    }

    .swal2-container.swal2-top>.swal2-popup {
      grid-column: 2;
      align-self: start;
      justify-self: center
    }

    .swal2-container.swal2-top-end>.swal2-popup,
    .swal2-container.swal2-top-right>.swal2-popup {
      grid-column: 3;
      align-self: start;
      justify-self: end
    }

    .swal2-container.swal2-center-start>.swal2-popup,
    .swal2-container.swal2-center-left>.swal2-popup {
      grid-row: 2;
      align-self: center
    }

    .swal2-container.swal2-center>.swal2-popup {
      grid-column: 2;
      grid-row: 2;
      align-self: center;
      justify-self: center
    }

    .swal2-container.swal2-center-end>.swal2-popup,
    .swal2-container.swal2-center-right>.swal2-popup {
      grid-column: 3;
      grid-row: 2;
      align-self: center;
      justify-self: end
    }

    .swal2-container.swal2-bottom-start>.swal2-popup,
    .swal2-container.swal2-bottom-left>.swal2-popup {
      grid-column: 1;
      grid-row: 3;
      align-self: end
    }

    .swal2-container.swal2-bottom>.swal2-popup {
      grid-column: 2;
      grid-row: 3;
      justify-self: center;
      align-self: end
    }

    .swal2-container.swal2-bottom-end>.swal2-popup,
    .swal2-container.swal2-bottom-right>.swal2-popup {
      grid-column: 3;
      grid-row: 3;
      align-self: end;
      justify-self: end
    }

    .swal2-container.swal2-grow-row>.swal2-popup,
    .swal2-container.swal2-grow-fullscreen>.swal2-popup {
      grid-column: 1/4;
      width: 100%
    }

    .swal2-container.swal2-grow-column>.swal2-popup,
    .swal2-container.swal2-grow-fullscreen>.swal2-popup {
      grid-row: 1/4;
      align-self: stretch
    }

    .swal2-container.swal2-no-transition {
      transition: none !important
    }

    .swal2-popup {
      display: none;
      position: relative;
      box-sizing: border-box;
      grid-template-columns: minmax(0, 100%);
      width: 32em;
      max-width: 100%;
      padding: 0 0 1.25em;
      border: none;
      border-radius: 5px;
      background: #fff;
      color: #545454;
      font-family: inherit;
      font-size: 1rem
    }

    .swal2-popup:focus {
      outline: none
    }

    .swal2-popup.swal2-loading {
      overflow-y: hidden
    }

    .swal2-title {
      position: relative;
      max-width: 100%;
      margin: 0;
      padding: .8em 1em 0;
      color: inherit;
      font-size: 1.875em;
      font-weight: 600;
      text-align: center;
      text-transform: none;
      word-wrap: break-word
    }

    .swal2-actions {
      display: flex;
      z-index: 1;
      box-sizing: border-box;
      flex-wrap: wrap;
      align-items: center;
      justify-content: center;
      width: auto;
      margin: 1.25em auto 0;
      padding: 0
    }

    .swal2-actions:not(.swal2-loading) .swal2-styled[disabled] {
      opacity: .4
    }

    .swal2-actions:not(.swal2-loading) .swal2-styled:hover {
      background-image: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1))
    }

    .swal2-actions:not(.swal2-loading) .swal2-styled:active {
      background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2))
    }

    .swal2-loader {
      display: none;
      align-items: center;
      justify-content: center;
      width: 2.2em;
      height: 2.2em;
      margin: 0 1.875em;
      animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
      border-width: .25em;
      border-style: solid;
      border-radius: 100%;
      border-color: #2778c4 rgba(0, 0, 0, 0) #2778c4 rgba(0, 0, 0, 0)
    }

    .swal2-styled {
      margin: .3125em;
      padding: .625em 1.1em;
      transition: box-shadow .1s;
      box-shadow: 0 0 0 3px rgba(0, 0, 0, 0);
      font-weight: 500
    }

    .swal2-styled:not([disabled]) {
      cursor: pointer
    }

    .swal2-styled.swal2-confirm {
      border: 0;
      border-radius: .25em;
      background: initial;
      background-color: #7066e0;
      color: #fff;
      font-size: 1em
    }

    .swal2-styled.swal2-confirm:focus {
      box-shadow: 0 0 0 3px rgba(112, 102, 224, .5)
    }

    .swal2-styled.swal2-deny {
      border: 0;
      border-radius: .25em;
      background: initial;
      background-color: #dc3741;
      color: #fff;
      font-size: 1em
    }

    .swal2-styled.swal2-deny:focus {
      box-shadow: 0 0 0 3px rgba(220, 55, 65, .5)
    }

    .swal2-styled.swal2-cancel {
      border: 0;
      border-radius: .25em;
      background: initial;
      background-color: #6e7881;
      color: #fff;
      font-size: 1em
    }

    .swal2-styled.swal2-cancel:focus {
      box-shadow: 0 0 0 3px rgba(110, 120, 129, .5)
    }

    .swal2-styled.swal2-default-outline:focus {
      box-shadow: 0 0 0 3px rgba(100, 150, 200, .5)
    }

    .swal2-styled:focus {
      outline: none
    }

    .swal2-styled::-moz-focus-inner {
      border: 0
    }

    .swal2-footer {
      justify-content: center;
      margin: 1em 0 0;
      padding: 1em 1em 0;
      border-top: 1px solid #eee;
      color: inherit;
      font-size: 1em
    }

    .swal2-timer-progress-bar-container {
      position: absolute;
      right: 0;
      bottom: 0;
      left: 0;
      grid-column: auto !important;
      overflow: hidden;
      border-bottom-right-radius: 5px;
      border-bottom-left-radius: 5px
    }

    .swal2-timer-progress-bar {
      width: 100%;
      height: .25em;
      background: rgba(0, 0, 0, .2)
    }

    .swal2-image {
      max-width: 100%;
      margin: 2em auto 1em
    }

    .swal2-close {
      z-index: 2;
      align-items: center;
      justify-content: center;
      width: 1.2em;
      height: 1.2em;
      margin-top: 0;
      margin-right: 0;
      margin-bottom: -1.2em;
      padding: 0;
      overflow: hidden;
      transition: color .1s, box-shadow .1s;
      border: none;
      border-radius: 5px;
      background: rgba(0, 0, 0, 0);
      color: #ccc;
      font-family: serif;
      font-family: monospace;
      font-size: 2.5em;
      cursor: pointer;
      justify-self: end
    }

    .swal2-close:hover {
      transform: none;
      background: rgba(0, 0, 0, 0);
      color: #f27474
    }

    .swal2-close:focus {
      outline: none;
      box-shadow: inset 0 0 0 3px rgba(100, 150, 200, .5)
    }

    .swal2-close::-moz-focus-inner {
      border: 0
    }

    .swal2-html-container {
      z-index: 1;
      justify-content: center;
      margin: 1em 1.6em .3em;
      padding: 0;
      overflow: auto;
      color: inherit;
      font-size: 1.125em;
      font-weight: normal;
      line-height: normal;
      text-align: center;
      word-wrap: break-word;
      word-break: break-word
    }

    .swal2-input,
    .swal2-file,
    .swal2-textarea,
    .swal2-select,
    .swal2-radio,
    .swal2-checkbox {
      margin: 1em 2em 3px
    }

    .swal2-input,
    .swal2-file,
    .swal2-textarea {
      box-sizing: border-box;
      width: auto;
      transition: border-color .1s, box-shadow .1s;
      border: 1px solid #d9d9d9;
      border-radius: .1875em;
      background: rgba(0, 0, 0, 0);
      box-shadow: inset 0 1px 1px rgba(0, 0, 0, .06), 0 0 0 3px rgba(0, 0, 0, 0);
      color: inherit;
      font-size: 1.125em
    }

    .swal2-input.swal2-inputerror,
    .swal2-file.swal2-inputerror,
    .swal2-textarea.swal2-inputerror {
      border-color: #f27474 !important;
      box-shadow: 0 0 2px #f27474 !important
    }

    .swal2-input:focus,
    .swal2-file:focus,
    .swal2-textarea:focus {
      border: 1px solid #b4dbed;
      outline: none;
      box-shadow: inset 0 1px 1px rgba(0, 0, 0, .06), 0 0 0 3px rgba(100, 150, 200, .5)
    }

    .swal2-input::placeholder,
    .swal2-file::placeholder,
    .swal2-textarea::placeholder {
      color: #ccc
    }

    .swal2-range {
      margin: 1em 2em 3px;
      background: #fff
    }

    .swal2-range input {
      width: 80%
    }

    .swal2-range output {
      width: 20%;
      color: inherit;
      font-weight: 600;
      text-align: center
    }

    .swal2-range input,
    .swal2-range output {
      height: 2.625em;
      padding: 0;
      font-size: 1.125em;
      line-height: 2.625em
    }

    .swal2-input {
      height: 2.625em;
      padding: 0 .75em
    }

    .swal2-file {
      width: 75%;
      margin-right: auto;
      margin-left: auto;
      background: rgba(0, 0, 0, 0);
      font-size: 1.125em
    }

    .swal2-textarea {
      height: 6.75em;
      padding: .75em
    }

    .swal2-select {
      min-width: 50%;
      max-width: 100%;
      padding: .375em .625em;
      background: rgba(0, 0, 0, 0);
      color: inherit;
      font-size: 1.125em
    }

    .swal2-radio,
    .swal2-checkbox {
      align-items: center;
      justify-content: center;
      background: #fff;
      color: inherit
    }

    .swal2-radio label,
    .swal2-checkbox label {
      margin: 0 .6em;
      font-size: 1.125em
    }

    .swal2-radio input,
    .swal2-checkbox input {
      flex-shrink: 0;
      margin: 0 .4em
    }

    .swal2-input-label {
      display: flex;
      justify-content: center;
      margin: 1em auto 0
    }

    .swal2-validation-message {
      align-items: center;
      justify-content: center;
      margin: 1em 0 0;
      padding: .625em;
      overflow: hidden;
      background: #f0f0f0;
      color: #666;
      font-size: 1em;
      font-weight: 300
    }

    .swal2-validation-message::before {
      content: "!";
      display: inline-block;
      width: 1.5em;
      min-width: 1.5em;
      height: 1.5em;
      margin: 0 .625em;
      border-radius: 50%;
      background-color: #f27474;
      color: #fff;
      font-weight: 600;
      line-height: 1.5em;
      text-align: center
    }

    .swal2-icon {
      position: relative;
      box-sizing: content-box;
      justify-content: center;
      width: 5em;
      height: 5em;
      margin: 2.5em auto .6em;
      border: 0.25em solid rgba(0, 0, 0, 0);
      border-radius: 50%;
      border-color: #000;
      font-family: inherit;
      line-height: 5em;
      cursor: default;
      user-select: none
    }

    .swal2-icon .swal2-icon-content {
      display: flex;
      align-items: center;
      font-size: 3.75em
    }

    .swal2-icon.swal2-error {
      border-color: #f27474;
      color: #f27474
    }

    .swal2-icon.swal2-error .swal2-x-mark {
      position: relative;
      flex-grow: 1
    }

    .swal2-icon.swal2-error [class^=swal2-x-mark-line] {
      display: block;
      position: absolute;
      top: 2.3125em;
      width: 2.9375em;
      height: .3125em;
      border-radius: .125em;
      background-color: #f27474
    }

    .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left] {
      left: 1.0625em;
      transform: rotate(45deg)
    }

    .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right] {
      right: 1em;
      transform: rotate(-45deg)
    }

    .swal2-icon.swal2-error.swal2-icon-show {
      animation: swal2-animate-error-icon .5s
    }

    .swal2-icon.swal2-error.swal2-icon-show .swal2-x-mark {
      animation: swal2-animate-error-x-mark .5s
    }

    .swal2-icon.swal2-warning {
      border-color: #facea8;
      color: #f8bb86
    }

    .swal2-icon.swal2-warning.swal2-icon-show {
      animation: swal2-animate-error-icon .5s
    }

    .swal2-icon.swal2-warning.swal2-icon-show .swal2-icon-content {
      animation: swal2-animate-i-mark .5s
    }

    .swal2-icon.swal2-info {
      border-color: #9de0f6;
      color: #3fc3ee
    }

    .swal2-icon.swal2-info.swal2-icon-show {
      animation: swal2-animate-error-icon .5s
    }

    .swal2-icon.swal2-info.swal2-icon-show .swal2-icon-content {
      animation: swal2-animate-i-mark .8s
    }

    .swal2-icon.swal2-question {
      border-color: #c9dae1;
      color: #87adbd
    }

    .swal2-icon.swal2-question.swal2-icon-show {
      animation: swal2-animate-error-icon .5s
    }

    .swal2-icon.swal2-question.swal2-icon-show .swal2-icon-content {
      animation: swal2-animate-question-mark .8s
    }

    .swal2-icon.swal2-success {
      border-color: #a5dc86;
      color: #a5dc86
    }

    .swal2-icon.swal2-success [class^=swal2-success-circular-line] {
      position: absolute;
      width: 3.75em;
      height: 7.5em;
      transform: rotate(45deg);
      border-radius: 50%
    }

    .swal2-icon.swal2-success [class^=swal2-success-circular-line][class$=left] {
      top: -0.4375em;
      left: -2.0635em;
      transform: rotate(-45deg);
      transform-origin: 3.75em 3.75em;
      border-radius: 7.5em 0 0 7.5em
    }

    .swal2-icon.swal2-success [class^=swal2-success-circular-line][class$=right] {
      top: -0.6875em;
      left: 1.875em;
      transform: rotate(-45deg);
      transform-origin: 0 3.75em;
      border-radius: 0 7.5em 7.5em 0
    }

    .swal2-icon.swal2-success .swal2-success-ring {
      position: absolute;
      z-index: 2;
      top: -0.25em;
      left: -0.25em;
      box-sizing: content-box;
      width: 100%;
      height: 100%;
      border: .25em solid rgba(165, 220, 134, .3);
      border-radius: 50%
    }

    .swal2-icon.swal2-success .swal2-success-fix {
      position: absolute;
      z-index: 1;
      top: .5em;
      left: 1.625em;
      width: .4375em;
      height: 5.625em;
      transform: rotate(-45deg)
    }

    .swal2-icon.swal2-success [class^=swal2-success-line] {
      display: block;
      position: absolute;
      z-index: 2;
      height: .3125em;
      border-radius: .125em;
      background-color: #a5dc86
    }

    .swal2-icon.swal2-success [class^=swal2-success-line][class$=tip] {
      top: 2.875em;
      left: .8125em;
      width: 1.5625em;
      transform: rotate(45deg)
    }

    .swal2-icon.swal2-success [class^=swal2-success-line][class$=long] {
      top: 2.375em;
      right: .5em;
      width: 2.9375em;
      transform: rotate(-45deg)
    }

    .swal2-icon.swal2-success.swal2-icon-show .swal2-success-line-tip {
      animation: swal2-animate-success-line-tip .75s
    }

    .swal2-icon.swal2-success.swal2-icon-show .swal2-success-line-long {
      animation: swal2-animate-success-line-long .75s
    }

    .swal2-icon.swal2-success.swal2-icon-show .swal2-success-circular-line-right {
      animation: swal2-rotate-success-circular-line 4.25s ease-in
    }

    .swal2-progress-steps {
      flex-wrap: wrap;
      align-items: center;
      max-width: 100%;
      margin: 1.25em auto;
      padding: 0;
      background: rgba(0, 0, 0, 0);
      font-weight: 600
    }

    .swal2-progress-steps li {
      display: inline-block;
      position: relative
    }

    .swal2-progress-steps .swal2-progress-step {
      z-index: 20;
      flex-shrink: 0;
      width: 2em;
      height: 2em;
      border-radius: 2em;
      background: #2778c4;
      color: #fff;
      line-height: 2em;
      text-align: center
    }

    .swal2-progress-steps .swal2-progress-step.swal2-active-progress-step {
      background: #2778c4
    }

    .swal2-progress-steps .swal2-progress-step.swal2-active-progress-step~.swal2-progress-step {
      background: #add8e6;
      color: #fff
    }

    .swal2-progress-steps .swal2-progress-step.swal2-active-progress-step~.swal2-progress-step-line {
      background: #add8e6
    }

    .swal2-progress-steps .swal2-progress-step-line {
      z-index: 10;
      flex-shrink: 0;
      width: 2.5em;
      height: .4em;
      margin: 0 -1px;
      background: #2778c4
    }

    [class^=swal2] {
      -webkit-tap-highlight-color: rgba(0, 0, 0, 0)
    }

    .swal2-show {
      animation: swal2-show .3s
    }

    .swal2-hide {
      animation: swal2-hide .15s forwards
    }

    .swal2-noanimation {
      transition: none
    }

    .swal2-scrollbar-measure {
      position: absolute;
      top: -9999px;
      width: 50px;
      height: 50px;
      overflow: scroll
    }

    .swal2-rtl .swal2-close {
      margin-right: initial;
      margin-left: 0
    }

    .swal2-rtl .swal2-timer-progress-bar {
      right: 0;
      left: auto
    }

    @keyframes swal2-toast-show {
      0% {
        transform: translateY(-0.625em) rotateZ(2deg)
      }

      33% {
        transform: translateY(0) rotateZ(-2deg)
      }

      66% {
        transform: translateY(0.3125em) rotateZ(2deg)
      }

      100% {
        transform: translateY(0) rotateZ(0deg)
      }
    }

    @keyframes swal2-toast-hide {
      100% {
        transform: rotateZ(1deg);
        opacity: 0
      }
    }

    @keyframes swal2-toast-animate-success-line-tip {
      0% {
        top: .5625em;
        left: .0625em;
        width: 0
      }

      54% {
        top: .125em;
        left: .125em;
        width: 0
      }

      70% {
        top: .625em;
        left: -0.25em;
        width: 1.625em
      }

      84% {
        top: 1.0625em;
        left: .75em;
        width: .5em
      }

      100% {
        top: 1.125em;
        left: .1875em;
        width: .75em
      }
    }

    @keyframes swal2-toast-animate-success-line-long {
      0% {
        top: 1.625em;
        right: 1.375em;
        width: 0
      }

      65% {
        top: 1.25em;
        right: .9375em;
        width: 0
      }

      84% {
        top: .9375em;
        right: 0;
        width: 1.125em
      }

      100% {
        top: .9375em;
        right: .1875em;
        width: 1.375em
      }
    }

    @keyframes swal2-show {
      0% {
        transform: scale(0.7)
      }

      45% {
        transform: scale(1.05)
      }

      80% {
        transform: scale(0.95)
      }

      100% {
        transform: scale(1)
      }
    }

    @keyframes swal2-hide {
      0% {
        transform: scale(1);
        opacity: 1
      }

      100% {
        transform: scale(0.5);
        opacity: 0
      }
    }

    @keyframes swal2-animate-success-line-tip {
      0% {
        top: 1.1875em;
        left: .0625em;
        width: 0
      }

      54% {
        top: 1.0625em;
        left: .125em;
        width: 0
      }

      70% {
        top: 2.1875em;
        left: -0.375em;
        width: 3.125em
      }

      84% {
        top: 3em;
        left: 1.3125em;
        width: 1.0625em
      }

      100% {
        top: 2.8125em;
        left: .8125em;
        width: 1.5625em
      }
    }

    @keyframes swal2-animate-success-line-long {
      0% {
        top: 3.375em;
        right: 2.875em;
        width: 0
      }

      65% {
        top: 3.375em;
        right: 2.875em;
        width: 0
      }

      84% {
        top: 2.1875em;
        right: 0;
        width: 3.4375em
      }

      100% {
        top: 2.375em;
        right: .5em;
        width: 2.9375em
      }
    }

    @keyframes swal2-rotate-success-circular-line {
      0% {
        transform: rotate(-45deg)
      }

      5% {
        transform: rotate(-45deg)
      }

      12% {
        transform: rotate(-405deg)
      }

      100% {
        transform: rotate(-405deg)
      }
    }

    @keyframes swal2-animate-error-x-mark {
      0% {
        margin-top: 1.625em;
        transform: scale(0.4);
        opacity: 0
      }

      50% {
        margin-top: 1.625em;
        transform: scale(0.4);
        opacity: 0
      }

      80% {
        margin-top: -0.375em;
        transform: scale(1.15)
      }

      100% {
        margin-top: 0;
        transform: scale(1);
        opacity: 1
      }
    }

    @keyframes swal2-animate-error-icon {
      0% {
        transform: rotateX(100deg);
        opacity: 0
      }

      100% {
        transform: rotateX(0deg);
        opacity: 1
      }
    }

    @keyframes swal2-rotate-loading {
      0% {
        transform: rotate(0deg)
      }

      100% {
        transform: rotate(360deg)
      }
    }

    @keyframes swal2-animate-question-mark {
      0% {
        transform: rotateY(-360deg)
      }

      100% {
        transform: rotateY(0)
      }
    }

    @keyframes swal2-animate-i-mark {
      0% {
        transform: rotateZ(45deg);
        opacity: 0
      }

      25% {
        transform: rotateZ(-25deg);
        opacity: .4
      }

      50% {
        transform: rotateZ(15deg);
        opacity: .8
      }

      75% {
        transform: rotateZ(-5deg);
        opacity: 1
      }

      100% {
        transform: rotateX(0);
        opacity: 1
      }
    }

    body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) {
      overflow: hidden
    }

    body.swal2-height-auto {
      height: auto !important
    }

    body.swal2-no-backdrop .swal2-container {
      background-color: rgba(0, 0, 0, 0) !important;
      pointer-events: none
    }

    body.swal2-no-backdrop .swal2-container .swal2-popup {
      pointer-events: all
    }

    body.swal2-no-backdrop .swal2-container .swal2-modal {
      box-shadow: 0 0 10px rgba(0, 0, 0, .4)
    }

    @media print {
      body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) {
        overflow-y: scroll !important
      }

      body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown)>[aria-hidden=true] {
        display: none
      }

      body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) .swal2-container {
        position: static !important
      }
    }

    body.swal2-toast-shown .swal2-container {
      box-sizing: border-box;
      width: 360px;
      max-width: 100%;
      background-color: rgba(0, 0, 0, 0);
      pointer-events: none
    }

    body.swal2-toast-shown .swal2-container.swal2-top {
      top: 0;
      right: auto;
      bottom: auto;
      left: 50%;
      transform: translateX(-50%)
    }

    body.swal2-toast-shown .swal2-container.swal2-top-end,
    body.swal2-toast-shown .swal2-container.swal2-top-right {
      top: 0;
      right: 0;
      bottom: auto;
      left: auto
    }

    body.swal2-toast-shown .swal2-container.swal2-top-start,
    body.swal2-toast-shown .swal2-container.swal2-top-left {
      top: 0;
      right: auto;
      bottom: auto;
      left: 0
    }

    body.swal2-toast-shown .swal2-container.swal2-center-start,
    body.swal2-toast-shown .swal2-container.swal2-center-left {
      top: 50%;
      right: auto;
      bottom: auto;
      left: 0;
      transform: translateY(-50%)
    }

    body.swal2-toast-shown .swal2-container.swal2-center {
      top: 50%;
      right: auto;
      bottom: auto;
      left: 50%;
      transform: translate(-50%, -50%)
    }

    body.swal2-toast-shown .swal2-container.swal2-center-end,
    body.swal2-toast-shown .swal2-container.swal2-center-right {
      top: 50%;
      right: 0;
      bottom: auto;
      left: auto;
      transform: translateY(-50%)
    }

    body.swal2-toast-shown .swal2-container.swal2-bottom-start,
    body.swal2-toast-shown .swal2-container.swal2-bottom-left {
      top: auto;
      right: auto;
      bottom: 0;
      left: 0
    }

    body.swal2-toast-shown .swal2-container.swal2-bottom {
      top: auto;
      right: auto;
      bottom: 0;
      left: 50%;
      transform: translateX(-50%)
    }

    body.swal2-toast-shown .swal2-container.swal2-bottom-end,
    body.swal2-toast-shown .swal2-container.swal2-bottom-right {
      top: auto;
      right: 0;
      bottom: 0;
      left: auto
    }
  </style>
</head>

<body>



  <header>
    <div class="container" id="ct_topo1">
      <div class="logo">
        <a href="inicial.php" title="Inicial"><img src="img/logo.png" alt="imobibrasil"></a>
      </div>

      <div class="menu">
        <div id="cssmenu">
          <div id="menu-button"><i class="fa fa-bars" aria-hidden="true"></i></div>


          <ul>
            <li class="active has-sub" id="menuItem_conf"><a href="#"><span>Configurações</span></a>
              <ul>
                <li><a href="configuracoes_gerais.php">Configurações Gerais</a></li>
                <li><a href="configuracoes_menus_locacaovenda.php">Busca Rápida</a></li>
                <li><a href="cadastro_usuarios_listar.php">Usuários Adicionais</a></li>
                <li><a href="cadastro_senha.php">Senha Principal</a></li>
              </ul>
            </li>

            <li class="active has-sub" id="menuItem_design"><a href="configuracoes_modelo.php"><span>Design</span></a>
              <ul>
                <li><a href="configuracoes_modelo.php">Modelos</a></li>
                <li><a href="configuracoes_gerais_imagens_alt.php?cod=1">Logotipo</a></li>
                <li><a href="configuracoes_gerais_imagens.php">Banners</a></li>
                <li><a href="configuracoes_gerais_paginas.php">Páginas</a></li>
              </ul>
            </li>

            <li class="active has-sub" id="menuItem_CRM"><a href="#"><span>CRM Imóveis</span></a>
              <ul>
                <li><a href="imovel_inserir.php#topo">Imóveis: Incluir</a></li>
                <li><a href="imovel_listar.php">Imóveis: Listar</a></li>
                <li><a href="clientes_listar.php">Clientes</a></li>
                <li><a href="imoveis-compativeis.php">Imóveis Compatíveis</a></li>
                <li><a href="negocios_listar.php">Negócios</a></li>
              </ul>
            </li>

            <li class="active has-sub" id="menuItem_Modulos"><a href="#"><span>Módulos</span></a>
              <ul>
                <li><a href="mod_agendacomp_listar.php">Agenda</a></li>
                <li><a href="areaprivada_inicial.php">Área Privada</a></li>
                <li><a href="mod_catalogo_imoveis_listar.php">Catálogo de Imóveis</a></li>
                <li><a href="contratos-listar.php">Gerar Contratos</a></li>
                <li><a href="atend_listar.php">Gerenciador de Atendimentos</a></li>
                <li><a href="hotsite_listar.php">HotSite</a></li>
                <li><a href="ferramentas_conversao_listar.php">Pop-up Conversão</a></li>
                <li><a href="mod_social-pixel-post.php">Social Pixel</a></li>
                <li><a href="mod_whatsapp_inicial.php">WhatsApp Lead</a></li>
                <li><a href="modulos-listar.php" class="menu-add-modulo">Adicionar Módulo</a></li>

              </ul>
            </li>

            <li class="active has-sub" id="menuItem_Relatorios"><a href="#"><span>Relatórios</span></a>
              <ul>
                <li><a href="relatorios-indicadores-listar.php"><span>Indicadores</span></a></li>
                <li><a href="relatorios_imoveis.php"><span>Imóveis</span></a></li>
                <li><a href="relatorios_clientes.php"><span>Clientes</span></a></li>
              </ul>
            </li>


            <li class="active has-sub" id="menuItem_Msg"><a href="caixa-mensagem-listar.php" id="cssmenumsg"><span>Mensagens</span></a></li>

          </ul>






        </div>
      </div>
    </div>

  </header>

  <section class="sub-menu">
    <div class="container" id="ct_topo2">

      <div class="tp-submenu-partemenu">
        <div>
          <ul>
            <li><a href="inicial.php" target="_self">Inicial</a></li>
            <li><a id="abrir_modal_suporte" href="#" target="_self">Suporte</a></li>
            <li><i class="fa fa-graduation-cap" aria-hidden="true" style="margin-right: 5px;"></i><a href="https://ajuda.imobibrasil.com.br/" target="_blank"><span class="ct2_verSite">Tutoriais de </span>Ajuda</a></li>
            <li><i class="fa fa-television" aria-hidden="true"></i> &nbsp;<a href="http://www.imobbrasil.com.br" target="_blank"><span class="ct2_verSite">Visualizar</span> <span>Site</span></a></li>

            <li class="last"><i class="fa fa-sign-out" aria-hidden="true"></i> &nbsp;<a href="identificacao.php?acao=sair" title="Sair"><span>Sair</span></a></li>
          </ul>
        </div>


      </div>

      <div class="tp-submenu-persona">
        <div class="tp-submenu-persona_User">
          <a href="cadastro_senha.php?pag=img" class="tp-submenu-persona-Link">

            <div class="tp-submenu-persona_User_Img">
              <i class="fa fa-user-circle tp-submenu-User-fa"></i>
            </div>
          </a>

          <div class="tp-submenu-persona_User_Text">
            <span>Super</span>
            <small>Administrador</small>
          </div>
        </div>
      </div>

      <script src="js/agenda/tooltip-balao.js?v=1" defer=""></script>
      <div class="tp-submenu-notificacao">
        <div class="tp-submenu-notificacao__box">
          <a class="tp-submenu-persona-Link">
            <div class="tp-submenu-persona_User_Img tp-bell-pulse">
              <i style="" class="fa fa-bell-o tp-submenu-bell notificacoes-nao-lidas"></i>
              <span class="pulse">1</span>
            </div>
          </a>
        </div>

        <div class="tp-central-notificacao-dropdown">
          <div class="tp-central-notificacao-dropdown-heading">
            <h5><span class="badge"></span> Notificações <i class="tp-central-notificacao-dropdown-heading-fechar">X</i></h5>
          </div>

          <div class="tp-central-notificacao-dropdown-body">
            <div class="notify-details notify-nao-lido">

              <div data-balao="Mensagens" class="balao notify-details-icone">
                <a href="caixa-mensagem-listar.php">
                  <i class="fa fa-comments-o"></i>
                </a>
              </div>
              <div class="notify-details-corpo">
                <a href="caixa-mensagem-listar.php">
                  <p style="font-size: 12px">Mensagens</p>
                  <p class="notify-details-corpo_titulo">Resumo do dia: você tem 2 novas mensagens! </p>
                  <small></small><small>
                    <p class="notify-details-data"> <strong>13/03/2023</strong></p>
                  </small>
                </a>
                <span data-codigo="391701" data-balao="Marcar" lido="" class="balao marcar-lido"><i class="fa fa-circle"></i></span>
              </div>
            </div>
            <div class="notify-details notify-nao-lido">

              <div data-balao="Mensagens" class="balao notify-details-icone">
                <a href="caixa-mensagem-listar.php">
                  <i class="fa fa-comments-o"></i>
                </a>
              </div>
              <div class="notify-details-corpo">
                <a href="caixa-mensagem-listar.php">
                  <p style="font-size: 12px">Mensagens</p>
                  <p class="notify-details-corpo_titulo">Resumo do dia: você tem 4 novas mensagens! </p>
                  <small></small><small>
                    <p class="notify-details-data"> <strong>08/03/2023</strong></p>
                  </small>
                </a>
                <span data-codigo="387324" data-balao="Marcar" lido="" class="balao marcar-lido"><i class="fa fa-circle"></i></span>
              </div>
            </div>
            <div class="notify-details notify-nao-lido">

              <div data-balao="Mensagens" class="balao notify-details-icone">
                <a href="caixa-mensagem-listar.php">
                  <i class="fa fa-comments-o"></i>
                </a>
              </div>
              <div class="notify-details-corpo">
                <a href="caixa-mensagem-listar.php">
                  <p style="font-size: 12px">Mensagens</p>
                  <p class="notify-details-corpo_titulo">Resumo do dia: você tem uma nova mensagem! </p>
                  <small></small><small>
                    <p class="notify-details-data"> <strong>02/03/2023</strong></p>
                  </small>
                </a>
                <span data-codigo="381755" data-balao="Marcar" lido="" class="balao marcar-lido"><i class="fa fa-circle"></i></span>
              </div>
            </div>
            <div class="notify-details notify-nao-lido">

              <div data-balao="Agenda" class="balao notify-details-icone">
                <a href="mod_agendacomp_listar.php">
                  <i class="fa fa-calendar"></i>
                </a>
              </div>
              <div class="notify-details-corpo">
                <a href="mod_agendacomp_listar.php">
                  <p style="font-size: 12px">Agenda</p>
                  <p class="notify-details-corpo_titulo">Atendimento</p>
                  <small></small><small>
                    <p class="notify-details-data">Compromisso: <strong>11/01/2023 - 08:00</strong></p>
                  </small>
                </a>
                <span data-codigo="346296" data-balao="Marcar" lido="" class="balao marcar-lido"><i class="fa fa-circle"></i></span>
              </div>
            </div>
            <div class="notify-details notify-nao-lido">

              <div data-balao="Agenda" class="balao notify-details-icone">
                <a href="mod_agendacomp_listar.php">
                  <i class="fa fa-calendar"></i>
                </a>
              </div>
              <div class="notify-details-corpo">
                <a href="mod_agendacomp_listar.php">
                  <p style="font-size: 12px">Agenda</p>
                  <p class="notify-details-corpo_titulo">Atendimento</p>
                  <small></small><small>
                    <p class="notify-details-data">Compromisso: <strong>24/01/2023 - 08:00</strong></p>
                  </small>
                </a>
                <span data-codigo="345152" data-balao="Marcar" lido="" class="balao marcar-lido"><i class="fa fa-circle"></i></span>
              </div>
            </div>
            <div class="notify-details notify-nao-lido">

              <div data-balao="Imóveis" compatíveis="" class="balao notify-details-icone">
                <a href="imoveis-compativeis.php">
                  <i class="fa fa-home"></i>
                </a>
              </div>
              <div class="notify-details-corpo">
                <a href="imoveis-compativeis.php">
                  <p style="font-size: 12px">Imóveis Compatíveis</p>
                  <p class="notify-details-corpo_titulo">Resumo do dia: 11 novos imóveis compatíveis! </p>
                  <small></small><small>
                    <p class="notify-details-data"> <strong>19/01/2023</strong></p>
                  </small>
                </a>
                <span data-codigo="341584" data-balao="Marcar" lido="" class="balao marcar-lido"><i class="fa fa-circle"></i></span>
              </div>
            </div>
            <div class="notify-details notify-nao-lido">

              <div data-balao="Agenda" class="balao notify-details-icone">
                <a href="mod_agendacomp_listar.php">
                  <i class="fa fa-calendar"></i>
                </a>
              </div>
              <div class="notify-details-corpo">
                <a href="mod_agendacomp_listar.php">
                  <p style="font-size: 12px">Agenda</p>
                  <p class="notify-details-corpo_titulo">Atendimento</p>
                  <small></small><small>
                    <p class="notify-details-data">Compromisso: <strong>02/12/2022 - 08:00</strong></p>
                  </small>
                </a>
                <span data-codigo="315341" data-balao="Marcar" lido="" class="balao marcar-lido"><i class="fa fa-circle"></i></span>
              </div>
            </div>
            <div class="notify-details notify-nao-lido">

              <div data-balao="Agenda" class="balao notify-details-icone">
                <a href="mod_agendacomp_listar.php">
                  <i class="fa fa-calendar"></i>
                </a>
              </div>
              <div class="notify-details-corpo">
                <a href="mod_agendacomp_listar.php">
                  <p style="font-size: 12px">Agenda</p>
                  <p class="notify-details-corpo_titulo">Atendimento</p>
                  <small></small><small>
                    <p class="notify-details-data">Compromisso: <strong>13/12/2022 - 08:00</strong></p>
                  </small>
                </a>
                <span data-codigo="315340" data-balao="Marcar" lido="" class="balao marcar-lido"><i class="fa fa-circle"></i></span>
              </div>
            </div>
            <div class="notify-details notify-nao-lido">

              <div data-balao="Agenda" class="balao notify-details-icone">
                <a href="mod_agendacomp_listar.php">
                  <i class="fa fa-calendar"></i>
                </a>
              </div>
              <div class="notify-details-corpo">
                <a href="mod_agendacomp_listar.php">
                  <p style="font-size: 12px">Agenda</p>
                  <p class="notify-details-corpo_titulo">Atendimento</p>
                  <small></small><small>
                    <p class="notify-details-data">Compromisso: <strong>25/12/2022 - 08:00</strong></p>
                  </small>
                </a>
                <span data-codigo="315339" data-balao="Marcar" lido="" class="balao marcar-lido"><i class="fa fa-circle"></i></span>
              </div>
            </div>
            <div class="notify-details notify-nao-lido">

              <div data-balao="Agenda" class="balao notify-details-icone">
                <a href="mod_agendacomp_listar.php">
                  <i class="fa fa-calendar"></i>
                </a>
              </div>
              <div class="notify-details-corpo">
                <a href="mod_agendacomp_listar.php">
                  <p style="font-size: 12px">Agenda</p>
                  <p class="notify-details-corpo_titulo">Atendimento</p>
                  <small>Teste</small><small>
                    <p class="notify-details-data">Compromisso: <strong>24/12/2022 - 01:00</strong></p>
                  </small>
                </a>
                <span data-codigo="315335" data-balao="Marcar" lido="" class="balao marcar-lido"><i class="fa fa-circle"></i></span>
              </div>
            </div>
          </div>

          <div class="notify-ver-mais">
            <a href="central-notificacoes-listar.php" class="tp-central-notificacao-dropdown-ver-todas">
              Notificações anteriores
            </a>

          </div>

        </div>



      </div>

      <link href="css/central-notificacoes-topo.css?v2" type="text/css" rel="stylesheet">
      <script src="central-notificacoes-topo.js"></script>
      <script type="text/javascript" src="//cdn.jsdelivr.net/npm/sweetalert2@11" charset="utf-8"></script>

      <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap');

        #conteudo_modal_contatos_suporte {
          display: none;
        }


        .topo-modal-contatos-container {}

        .topo-modal-contatos-container-popup {
          width: unset;
        }

        .topo-modal-contatos-container .modal-contatos {
          max-width: 600px;
          margin: 0 auto;
          font-family: 'Ubuntu', sans-serif;
          border-radius: 5px;
          overflow: hidden;
          transition: 0.8s;
          background-color: #fff;

        }

        .topo-modal-contatos-container .modal-contatos a {
          text-decoration: none;

        }

        .topo-modal-contatos-container .modal-contatos ul {
          list-style: none;
        }

        .topo-modal-contatos-container .modal-contatos-header {
          background-color: #EBEFF2;
          border-top-right-radius: 5px;
          border-bottom-left-radius: 5px;
          display: flex;
          justify-content: space-between;
          align-items: center;
          padding: 21.55px 15px;
        }

        .topo-modal-contatos-container .modal-contatos-header h4 {
          font-weight: 800;
          font-family: ubuntu;
          font-size: 22px;
          line-height: 1.1;
          color: #6a6c6f;
          margin: 0px;
        }

        .topo-modal-contatos-container .modal-contatos-header button {
          border: none;
          color: #6a6c6f;
          opacity: 1;
          font-size: 21px;
          font-weight: bold;
          line-height: 1;
          text-shadow: 0 1px 0 #fff;
          position: relative;
          top: 0px;
          cursor: pointer;
        }

        .topo-modal-contatos-container .modal-contatos-body {
          padding: 0px 15px 15px;
          margin-top: 21px;
        }

        .topo-modal-contatos-container .modal-contatos-buttons a {
          display: flex;
          align-items: center;
          justify-content: center;
          gap: 8px;
          height: 50px;
          border-radius: 4px;
          font-weight: bold;
          color: #fff;
          transition: 0.3s ease-in;
          box-shadow: inset 0 -2px 0 0 rgb(0 0 0 / 12%);
        }

        .topo-modal-contatos-container .modal-contatos-buttons a:hover {
          filter: brightness(0.9);
        }

        .topo-modal-contatos-container .modal-contatos-buttons-group {
          margin-top: 21px;
          display: grid;
          grid-template-columns: repeat(auto-fill, minmax(190px, 1fr));
          gap: 21px;
        }

        .topo-modal-contatos-container .modal-btn-whatsapp {
          background: #2CA62F;
          border-color: #4cae4c;
        }

        .topo-modal-contatos-container .modal-btn-telegram p {
          max-width: 80%;
        }

        .topo-modal-contatos-container .modal-btn-telegram {
          background: #0088CC;
          display: flex;
          align-items: center;
          justify-content: center;
          gap: 8px;
          height: 50px;
          border-radius: 4px;
          font-weight: bold;
          color: #fff;
          transition: 0.3s ease-in;
          box-shadow: inset 0 -2px 0 0 rgb(0 0 0 / 12%);
          margin-top: 15px;
          max-width: 460px;
          font-size: 12px;
          font-weight: normal;
        }

        .topo-modal-contatos-container .modal-btn-chat {
          background: #F8C300;
          color: #000 !important;
        }

        .topo-modal-contatos-container .modal-btn-centralAjuda {
          background: #2CA62F;

        }

        .topo-modal-contatos-container .modal-btn-suporte {
          background: #007fe2;
        }

        .topo-modal-contatos-container .modal-contatos-video {
          margin-top: 21px;
        }

        .topo-modal-contatos-container .modal-contatos-info {
          margin-top: 15px;
          display: flex;
          flex-wrap: wrap;
          justify-content: center;
          gap: 0px 15px;
          align-items: center;
        }

        .topo-modal-contatos-container .modal-contatos-info p,
        .modal-contatos-info a {
          display: flex;
          gap: 10px;
          color: #767D82;
          font-size: 13px;
          margin: 5px;
          align-items: center;
        }

        .topo-modal-contatos-container .modal-contatos-atendimento {
          text-align: center;
          font-weight: bold;
          font-size: 13px;
        }

        .topo-modal-contatos-container .modal-contatos-btn-mais {
          width: 30px;
          height: 30px;
          display: flex;
          align-items: center;
          justify-content: center;
          gap: 5px;
          background-color: #007FE2;
          border: none;
          border-radius: 4px;
          color: #fff;
          font-size: 16px;
          cursor: pointer;
          font-weight: bold;
        }

        .topo-modal-contatos-container .modal-contatos-btn-mais svg {
          transform: initial;
          transition: 0.8s;
        }

        .topo-modal-contatos-container .modal-contatos-btn-mais.active svg {
          transform: rotate(180deg);
          transition: 0.8s;
        }


        .topo-modal-contatos-container .modal-contatos-lista-container {
          display: none;
          justify-content: center;
          border: 1px solid #ccc;
          border-radius: 4px;
          margin-top: 21px;
          transition: 0.8s ease-in;
          transform: translateY(-20px);

        }

        .topo-modal-contatos-container .modal-contatos-lista-container.active {
          display: flex;
          animation: fade 0.7s forwards;
          padding: 15px;
        }

        @keyframes fade {
          from {
            opacity: 0;
            transform: translateY(100px);

          }

          to {
            opacity: 1;
            transform: initial;
            transition: opacity 0.5s linear;
          }
        }

        .topo-modal-contatos-container .modal-contatos-lista {
          list-style: none;
          padding: 0px;
          display: flex;
          flex-direction: column;
          gap: 6px;
          font-size: 14px;
        }

        .topo-modal-contatos-container .modal-contatos-lista a {
          color: #767d82;
        }

        .topo-modal-contatos-container .modal-contatos-lista span {
          font-weight: bold;
        }

        .topo-modal-contatos-container-fechar {
          color: #595959;
          font-weight: bold;
          padding: 10px;
        }

        .topo-modal-contatos-container-header {
          align-items: flex-start;
        }

        .swal2-container {
          z-index: 999999;
        }

        @media screen and (max-width:719px) {

          .topo-modal-contatos-container .modal-contatos {
            margin-top: 0px;
          }

          .topo-modal-contatos-container .modal-contatos-header button {
            font-size: 32px;
          }

          .modal-contatos-info {
            justify-content: center;
          }

          .topo-modal-contatos-container .modal-contatos-header {
            padding: 11px 15px;
          }


        }

        .tp-submenu-User-fa {
          font-size: 30px !important;
          color: #dadada !important;
          line-height: 38px !important;
        }

        .tp-submenu-bell {
          font-size: 24px !important;
          color: #cbcbcb !important;
        }
      </style>

      <div id="conteudo_modal_contatos_suporte">
        <section class="topo-modal-contatos-container">

          <div class="modal-contatos">


            <div class="modal-contatos-body">
              <div class="modal-contatos-buttons">


                <div class="modal-contatos-buttons-group">
                  <a target="_blank" href="https://web.whatsapp.com/send?phone=5518996469265&amp;text=OlÃ¡, preciso de suporte. Meu site Ã©: www.imobbrasil.com.br" class="modal-btn-whatsapp">
                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M17.8547 3.05156C15.8906 1.08281 13.275 0 10.4953 0C4.75781 0 0.0890625 4.66875 0.0890625 10.4062C0.0890625 12.2391 0.567188 14.0297 1.47656 15.6094L0 21L5.51719 19.5516C7.03594 20.3813 8.74687 20.8172 10.4906 20.8172H10.4953C16.2281 20.8172 21 16.1484 21 10.4109C21 7.63125 19.8188 5.02031 17.8547 3.05156ZM10.4953 19.0641C8.93906 19.0641 7.41562 18.6469 6.08906 17.8594L5.775 17.6719L2.50313 18.5297L3.375 15.3375L3.16875 15.0094C2.30156 13.6313 1.84688 12.0422 1.84688 10.4062C1.84688 5.63906 5.72812 1.75781 10.5 1.75781C12.8109 1.75781 14.9812 2.65781 16.6125 4.29375C18.2437 5.92969 19.2469 8.1 19.2422 10.4109C19.2422 15.1828 15.2625 19.0641 10.4953 19.0641ZM15.2391 12.5859C14.9813 12.4547 13.7016 11.8266 13.4625 11.7422C13.2234 11.6531 13.05 11.6109 12.8766 11.8734C12.7031 12.1359 12.2063 12.7172 12.0516 12.8953C11.9016 13.0688 11.7469 13.0922 11.4891 12.9609C9.96094 12.1969 8.95781 11.5969 7.95 9.86719C7.68281 9.40781 8.21719 9.44063 8.71406 8.44687C8.79844 8.27344 8.75625 8.12344 8.69062 7.99219C8.625 7.86094 8.10469 6.58125 7.88906 6.06094C7.67813 5.55469 7.4625 5.625 7.30313 5.61563C7.15313 5.60625 6.97969 5.60625 6.80625 5.60625C6.63281 5.60625 6.35156 5.67188 6.1125 5.92969C5.87344 6.19219 5.20312 6.82031 5.20312 8.1C5.20312 9.37969 6.13594 10.6172 6.2625 10.7906C6.39375 10.9641 8.09531 13.5891 10.7062 14.7188C12.3562 15.4312 13.0031 15.4922 13.8281 15.3703C14.3297 15.2953 15.3656 14.7422 15.5812 14.1328C15.7969 13.5234 15.7969 13.0031 15.7313 12.8953C15.6703 12.7781 15.4969 12.7125 15.2391 12.5859Z" fill="white"></path>
                    </svg>
                    WhatsApp
                  </a>
                  <a href="suporte.php" class="modal-btn-suporte">
                    <svg width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                      <path d="M402.6 83.2l90.2 90.2c3.8 3.8 3.8 10 0 13.8L274.4 405.6l-92.8 10.3c-12.4 1.4-22.9-9.1-21.5-21.5l10.3-92.8L388.8 83.2c3.8-3.8 10-3.8 13.8 0zm162-22.9l-48.8-48.8c-15.2-15.2-39.9-15.2-55.2 0l-35.4 35.4c-3.8 3.8-3.8 10 0 13.8l90.2 90.2c3.8 3.8 10 3.8 13.8 0l35.4-35.4c15.2-15.3 15.2-40 0-55.2zM384 346.2V448H64V128h229.8c3.2 0 6.2-1.3 8.5-3.5l40-40c7.6-7.6 2.2-20.5-8.5-20.5H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V306.2c0-10.7-12.9-16-20.5-8.5l-40 40c-2.2 2.3-3.5 5.3-3.5 8.5z" fill="white"></path>
                    </svg>

                    Solicitar Suporte
                  </a>

                  <a target="_blank" href="https://tawk.to/chat/591adfa164f23d19a89b250b/1bn99j27u" class="modal-btn-chat">
                    <svg width="25" height="31" viewBox="0 0 29 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M14.5256 5C6.50249 5 0.00159581 10.1953 0.00159581 16.6071C0.00159581 19.2651 1.13129 21.6992 3.00372 23.6496C2.15943 25.8538 0.401047 27.7165 0.372677 27.7372C-0.00322709 28.1278 -0.102523 28.6998 0.110253 29.1881C0.330167 29.6763 0.815977 30 1.36182 30C4.85135 30 7.55218 28.5631 9.25439 27.4191C10.8431 27.9241 12.6702 28.2143 14.5256 28.2143C22.5486 28.2143 29 23.0173 29 16.6071C29 10.197 22.5486 5 14.5256 5ZM14.5312 25.5357C13.0134 25.5357 11.5172 25.3055 10.0839 24.8594L8.79309 24.4618L7.68666 25.2291C6.87811 25.7938 5.7643 26.4222 4.42409 26.8474C4.84255 26.171 5.23945 25.4104 5.55209 24.6013L6.15467 23.0388L4.98468 21.8184C3.96166 20.7422 2.72756 18.9621 2.72756 16.6071C2.72756 11.6825 8.01859 7.67857 14.5295 7.67857C21.0405 7.67857 26.3315 11.6825 26.3315 16.6071C26.3315 21.5318 21.0393 25.5357 14.5312 25.5357Z" fill="black"></path>
                      <path d="M10.4801 18.1023C10.1648 18.1023 9.89418 17.9893 9.66832 17.7635C9.44247 17.5376 9.32955 17.267 9.32955 16.9517C9.32955 16.6364 9.44247 16.3658 9.66832 16.1399C9.89418 15.9141 10.1648 15.8011 10.4801 15.8011C10.7955 15.8011 11.0661 15.9141 11.2919 16.1399C11.5178 16.3658 11.6307 16.6364 11.6307 16.9517C11.6307 17.1605 11.5774 17.3523 11.4709 17.527C11.3686 17.7017 11.2301 17.8423 11.0554 17.9489C10.8849 18.0511 10.6932 18.1023 10.4801 18.1023ZM15.4371 18.1023C15.1218 18.1023 14.8512 17.9893 14.6254 17.7635C14.3995 17.5376 14.2866 17.267 14.2866 16.9517C14.2866 16.6364 14.3995 16.3658 14.6254 16.1399C14.8512 15.9141 15.1218 15.8011 15.4371 15.8011C15.7525 15.8011 16.0231 15.9141 16.2489 16.1399C16.4748 16.3658 16.5877 16.6364 16.5877 16.9517C16.5877 17.1605 16.5344 17.3523 16.4279 17.527C16.3256 17.7017 16.1871 17.8423 16.0124 17.9489C15.842 18.0511 15.6502 18.1023 15.4371 18.1023ZM20.3942 18.1023C20.0788 18.1023 19.8082 17.9893 19.5824 17.7635C19.3565 17.5376 19.2436 17.267 19.2436 16.9517C19.2436 16.6364 19.3565 16.3658 19.5824 16.1399C19.8082 15.9141 20.0788 15.8011 20.3942 15.8011C20.7095 15.8011 20.9801 15.9141 21.206 16.1399C21.4318 16.3658 21.5447 16.6364 21.5447 16.9517C21.5447 17.1605 21.4915 17.3523 21.3849 17.527C21.2827 17.7017 21.1442 17.8423 20.9695 17.9489C20.799 18.0511 20.6072 18.1023 20.3942 18.1023Z" fill="black"></path>
                    </svg>
                    Chat

                  </a>

                  <a target="_blank" href="https://ajuda.imobibrasil.com.br/" class="modal-btn-centralAjuda">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" width="25" height="25">
                      <path d="M622.34 153.2L343.4 67.5c-15.2-4.67-31.6-4.67-46.79 0L17.66 153.2c-23.54 7.23-23.54 38.36 0 45.59l48.63 14.94c-10.67 13.19-17.23 29.28-17.88 46.9C38.78 266.15 32 276.11 32 288c0 10.78 5.68 19.85 13.86 25.65L20.33 428.53C18.11 438.52 25.71 448 35.94 448h56.11c10.24 0 17.84-9.48 15.62-19.47L82.14 313.65C90.32 307.85 96 298.78 96 288c0-11.57-6.47-21.25-15.66-26.87.76-15.02 8.44-28.3 20.69-36.72L296.6 284.5c9.06 2.78 26.44 6.25 46.79 0l278.95-85.7c23.55-7.24 23.55-38.36 0-45.6zM352.79 315.09c-28.53 8.76-52.84 3.92-65.59 0l-145.02-44.55L128 384c0 35.35 85.96 64 192 64s192-28.65 192-64l-14.18-113.47-145.03 44.56z" fill="white"></path>
                    </svg>
                    Central de Ajuda
                  </a>


                </div>

              </div>


              <div class="modal-contatos-video">
                <iframe max-width="600" width="100%" height="315" src="https://www.youtube.com/embed/70ZzW1BLjo4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
              </div>

              <div class="modal-contatos-info">

                <a href="tel:1140636343" title="Telefone (11) 4063-6343">
                  <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.4867 12.7194L13.5491 11.0319C13.3809 10.9602 13.1939 10.9451 13.0164 10.9889C12.8389 11.0326 12.6804 11.1329 12.5647 11.2745L10.8209 13.405C8.08423 12.1147 5.88181 9.91225 4.59149 7.17555L6.72199 5.43177C6.86391 5.31634 6.96436 5.15782 7.00813 4.9802C7.0519 4.80258 7.03661 4.61553 6.96457 4.44738L5.27705 0.509807C5.19798 0.328542 5.05815 0.180544 4.88165 0.0913347C4.70516 0.00212529 4.50307 -0.0227045 4.31023 0.0211269L0.653918 0.864892C0.467997 0.907825 0.302119 1.01251 0.183355 1.16186C0.064592 1.3112 -4.28284e-05 1.4964 2.12917e-08 1.68721C2.12917e-08 10.7049 7.30911 18 16.3128 18C16.5037 18.0001 16.6889 17.9355 16.8384 17.8168C16.9878 17.698 17.0925 17.5321 17.1355 17.3461L17.9792 13.6898C18.0228 13.496 17.9974 13.2931 17.9075 13.116C17.8176 12.9389 17.6688 12.7987 17.4867 12.7194Z" fill="#7F8082"></path>
                  </svg>
                  (11) 4063-6343
                </a>
                <a href="tel:7140629662" title="Telefone (71) 4062-9662 ">
                  <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.4867 12.7194L13.5491 11.0319C13.3809 10.9602 13.1939 10.9451 13.0164 10.9889C12.8389 11.0326 12.6804 11.1329 12.5647 11.2745L10.8209 13.405C8.08423 12.1147 5.88181 9.91225 4.59149 7.17555L6.72199 5.43177C6.86391 5.31634 6.96436 5.15782 7.00813 4.9802C7.0519 4.80258 7.03661 4.61553 6.96457 4.44738L5.27705 0.509807C5.19798 0.328542 5.05815 0.180544 4.88165 0.0913347C4.70516 0.00212529 4.50307 -0.0227045 4.31023 0.0211269L0.653918 0.864892C0.467997 0.907825 0.302119 1.01251 0.183355 1.16186C0.064592 1.3112 -4.28284e-05 1.4964 2.12917e-08 1.68721C2.12917e-08 10.7049 7.30911 18 16.3128 18C16.5037 18.0001 16.6889 17.9355 16.8384 17.8168C16.9878 17.698 17.0925 17.5321 17.1355 17.3461L17.9792 13.6898C18.0228 13.496 17.9974 13.2931 17.9075 13.116C17.8176 12.9389 17.6688 12.7987 17.4867 12.7194Z" fill="#7F8082"></path>
                  </svg>
                  (71) 4062-9662
                </a>

                <a href="tel:2140636693" title="Telefone (21) 4063-6693">
                  <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.4867 12.7194L13.5491 11.0319C13.3809 10.9602 13.1939 10.9451 13.0164 10.9889C12.8389 11.0326 12.6804 11.1329 12.5647 11.2745L10.8209 13.405C8.08423 12.1147 5.88181 9.91225 4.59149 7.17555L6.72199 5.43177C6.86391 5.31634 6.96436 5.15782 7.00813 4.9802C7.0519 4.80258 7.03661 4.61553 6.96457 4.44738L5.27705 0.509807C5.19798 0.328542 5.05815 0.180544 4.88165 0.0913347C4.70516 0.00212529 4.50307 -0.0227045 4.31023 0.0211269L0.653918 0.864892C0.467997 0.907825 0.302119 1.01251 0.183355 1.16186C0.064592 1.3112 -4.28284e-05 1.4964 2.12917e-08 1.68721C2.12917e-08 10.7049 7.30911 18 16.3128 18C16.5037 18.0001 16.6889 17.9355 16.8384 17.8168C16.9878 17.698 17.0925 17.5321 17.1355 17.3461L17.9792 13.6898C18.0228 13.496 17.9974 13.2931 17.9075 13.116C17.8176 12.9389 17.6688 12.7987 17.4867 12.7194Z" fill="#7F8082"></path>
                  </svg>
                  (21) 4063-6693
                </a>

                <button type="button" class="modal-contatos-btn-mais" id="open-list">
                  +
                </button>
              </div>
              <div class="modal-contatos-lista-container">
                <ul class="modal-contatos-lista">
                  <li>
                    <a href="tel:1832220557" title="Telefone (18) 3222-0557">(18) <span> 3222-0557</span> - PRESIDENTE PRUDENTE / SP</a>
                  </li>
                  <li>
                    <a href="tel:1140636343" title="Telefone (11) 4063-6343">(11) <span> 4063-6343</span> - SÃO PAULO / SP</a>
                  </li>
                  <li>
                    <a href="tel:2140636693" title="Telefone (21) 4063-6693">(21) <span> 4063-6693</span> - RIO DE JANEIRO / RJ</a>
                  </li>
                  <li>
                    <a href="tel:3140627793" title="Telefone (31) 4062-7793">(31) <span> 4062-7793</span> - BELO HORIZONTE / MG</a>
                  </li>
                  <li>
                    <a href="tel:4140639662" title="Telefone (41) 4063-9662">(41) <span> 4063-9662</span> - CURITIBA / PR</a>
                  </li>
                  <li>
                    <a href="tel:4840529233" title="Telefone (48) 4052-9233">(48) <span> 4052-9233</span> - FLORIANÓPOLIS / SC</a>
                  </li>
                  <li>
                    <a href="tel:5140639662" title="Telefone (51) 4063-9662">(51) <span> 4063-9662</span> - PORTO ALEGRE / RS</a>
                  </li>
                  <li>
                    <a href="tel:6140639725" title="Telefone (61) 4063-9725">(61)<span> 4063-9725</span> - BRASÍLIA / DF</a>
                  </li>
                  <li>
                    <a href="tel:6240539253" title="Telefone (62) 4053-9253">(62) <span> 4053-9253</span> - GOIÂNIA / GO</a>
                  </li>
                  <li>
                    <a href="tel:7140629662" title="Telefone (71) 4062-9662">(71) <span> 4062-9662</span> - SALVADOR / BA</a>
                  </li>
                  <li>
                    <a href="tel:8140629590" title="Telefone (81) 4062-9590">(81) <span> 4062-9590</span> - RECIFE / PE</a>
                  </li>
                  <li>
                    <a href="tel:8540629775" title="Telefone (85) 4062-9775">(85) <span> 4062-9775</span> - FORTALEZA / CE</a>
                  </li>
                  <li>
                    <a href="tel:18991652103" title="Telefone (18) 99165-2103">(18) <span> 99165-2103</span> (claro)</a>
                  </li>
                  <li>
                    <a href="tel:18988227436" title="Telefone (18) 98822-7436">(18) <span> 98822-7436</span> (oi)</a>
                  </li>
                  <li>
                    <a href="tel:18981282008" title="Telefone (18) 98128-2008">(18) <span> 98128-2008</span> (tim)</a>
                  </li>
                  <li>
                    <a target="_blank" href="https://web.whatsapp.com/send?phone=5518996469265&amp;text=OlÃ¡, preciso de suporte. Meu site Ã©: www.imobbrasil.com.br" title="Whatsapp Vivo" rel="noreferrer">(18) <span>99646-9265</span> (vivo) <i class="fa fa-whatsapp"></i></a>
                  </li>
                </ul>
              </div>
              <div class="modal-contatos-info">
                <p>
                  <svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20.6021 5.28333C20.7621 5.15417 21 5.275 21 5.47917V14C21 15.1042 20.1182 16 19.0312 16H1.96875C0.881836 16 0 15.1042 0 14V5.48333C0 5.275 0.233789 5.15833 0.397852 5.2875C1.3166 6.0125 2.53477 6.93333 6.71836 10.0208C7.58379 10.6625 9.04395 12.0125 10.5 12.0042C11.9643 12.0167 13.4531 10.6375 14.2857 10.0208C18.4693 6.93333 19.6834 6.00833 20.6021 5.28333ZM10.5 10.6667C11.4516 10.6833 12.8215 9.45 13.5105 8.94167C18.9533 4.92917 19.3676 4.57917 20.6227 3.57917C20.8605 3.39167 21 3.1 21 2.79167V2C21 0.895833 20.1182 0 19.0312 0H1.96875C0.881836 0 0 0.895833 0 2V2.79167C0 3.1 0.139453 3.3875 0.377344 3.57917C1.63242 4.575 2.04668 4.92917 7.48945 8.94167C8.17852 9.45 9.54844 10.6833 10.5 10.6667Z" fill="#767D82"></path>
                  </svg>
                  <a href="mailto:contato@ImobiBrasil.com.br">contato@imobibrasil.com.br</a>

                </p>
              </div>
              <div class="modal-contatos-atendimento">
                <p>Atendimento de segunda-feira à sexta-feira das 08:00 às 18:00 horas</p>
              </div>



              <a target="_blank" href="https://t.me/+ORp6dPe7VltjN2Qx" class="modal-btn-telegram">
                <svg width="22" height="19" viewBox="0 0 22 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M21.8107 1.66995L18.5099 17.2364C18.2609 18.335 17.6115 18.6084 16.6887 18.0908L11.6594 14.3848L9.2326 16.7188C8.96405 16.9873 8.73944 17.2119 8.22186 17.2119L8.58319 12.0899L17.9045 3.66702C18.3097 3.30569 17.8166 3.1055 17.2746 3.46683L5.75116 10.7227L0.790218 9.16995C-0.288883 8.83304 -0.308415 8.09085 1.01483 7.57327L20.4191 0.0976854C21.3176 -0.239229 22.1037 0.297881 21.8107 1.66995Z" fill="white"></path>
                </svg>
                <p>Participe do nosso grupo no Telegram e fique por dentro das atualizações
                  e novidades do sistema.</p>
              </a>
            </div>
          </div>
        </section>
      </div>






      <script>
        $(function() {

          $('#abrir_modal_suporte').on('click', function(e) {
            e.preventDefault();
            Swal.fire({
              title: 'Fale Conosco',
              html: $('#conteudo_modal_contatos_suporte').html(),
              showCloseButton: true,
              focusConfirm: false,
              showCancelButton: false,
              showConfirmButton: false,
              customClass: {
                closeButton: 'topo-modal-contatos-container-fechar',
                header: 'topo-modal-contatos-container-header',
                popup: 'topo-modal-contatos-container-popup'
              }
            });
          })






          $("body").on('click', '#open-list', function() {
            $(this).toggleClass("active");
            $(".modal-contatos-lista-container").toggleClass("active");
          });
        })
      </script>


    </div>
  </section>


  <div style="height:100%;">
    <section class="corpo">
      <div class="container">
        <div class="conteudo">
          <h1 class="titulo_placa">Design: Modelo e Cor</h1>


          <style>
            /* SEU STYLE*/
            .corpo .conteudo {
              padding: 10px 20px;
              margin: 0 0 10px 0;
              box-shadow: 0 2px 2px 0 rgba(0, 0, 0, .05), 0 3px 1px -2px rgba(0, 0, 0, .08), 0 1px 5px 0 rgba(0, 0, 0, .08);
              float: left;
            }

            /* NAV*/
            .cont-nav section div {
              padding: 0px 10px;
              width: 100%;
              border: 0px solid #ddd;
              background: #fff;
              line-height: 1.5em;
              letter-spacing: 0.3px;
              color: #444;
              float: left;
            }

            .cont-nav p {
              margin: 0;
            }

            .cont-nav .grid-4 {
              width: 33.33%;
            }

            .cont-nav .grid-6 {
              width: 50%;
            }

            .cont-nav .grid-8 {
              width: 66.66666664%;
            }

            .cont-nav .item-pg {
              float: left;
              width: 100%;
              color: #0db33b;
              padding: 0;
              margin: 0 0 25px 0;
              border-bottom: 4px solid #f4f4f4;
              padding-bottom: 30px;
            }

            .cont-nav hr {
              float: left;
              border: 0;
              width: 100%;
              border-bottom: 2px solid gray;
              margin: 15px 0;
            }

            .cont-nav {
              width: 100%;
              margin: 30px 0;
              float: left;
            }

            .box-button {
              margin-top: 30px;
              text-align: center;
            }

            ul.navegacao {
              float: left;
              width: 100%;
              height: 55px;
              /* margin: 40px 0px 30px 0px; */
              margin: 0;
              padding: 0;
              border-bottom: 1px solid #dedede;
              font-family: Arial;
              text-transform: uppercase;
            }

            .navegacao li {
              list-style: none;
              float: left;
              width: auto;
              /* padding:20px 0; */
            }

            .navegacao li a {
              list-style: none;
              float: left;
              width: auto;
              text-decoration: none;
              padding: 20px 15px;
              font-weight: bold;
            }

            .navegacao li a:hover {
              background: #eff3f5;
              list-style: none;
              float: left;
              width: auto;
              border-bottom: 0px solid #0db33b;
              transition: ease 0.3s;
            }

            .navegacao li a.active {
              border-bottom: 4px solid #0db33b;
              color: #0db33b;
              background: #eff3f5;
            }

            .cont-nav div.anuncio {
              position: relative;
              float: right;
              margin-top: -20px;
              z-index: 10;
            }

            .cont-nav .anuncio h1 {
              font-family: Arial;
              font-weight: normal;
              color: #3035c6;
              font-size: 18px;
            }

            .cont-nav .anuncio span {
              font-family: Arial;
              font-weight: normal;
              color: #006621;
              font-size: 14px;
            }

            .cont-nav .anuncio p {
              font-family: Arial;
              font-weight: normal;
              color: #545454 !important;
              font-size: 14px;
            }

            .cont-nav div.anuncio:after {
              content: "";
              display: block;
              position: absolute;
              top: 0;
              right: 0;
              width: 50%;
              height: 100%;
              background-image: linear-gradient(to left, #FFF, transparent);
            }

            .cont-nav.pc-social input {
              width: 95%;
            }

            .cont-nav .pc-social i {
              float: left;
              width: 26px;
              font-size: 21px;
              margin: 0 10px;
              line-height: 2;
            }

            .cont-nav .pc-social div {
              margin: 0;
              padding: 0;
            }

            .cont-nav .item-pg h3 {
              margin: 0 0 4px 0;
              font-weight: bold;
              font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
              font-size: 20px;
            }

            .cont-nav .item-pg p {
              text-transform: none;
              color: #333;
            }

            /*
			input[type=text] { margin-bottom: 5px; font-size:11px; }
			select { margin-bottom:12px; font-size:11px; }
			.caixa, .campo { font-size:11px; padding-left: 5px; }
			*/

            .paginas-extras ul {
              float: left;
              width: 100%;
              list-style: none;
              margin: 0;
              padding: 0;
            }

            .paginas-extras li {
              border: 1px solid #e6e6e6;
            }

            .paginas-extras li {
              float: left;
              width: 100%;
              padding: 0px 5px;
              margin: 0;
              margin-bottom: 10px;
              line-height: 45px;
              position: relative;
            }

            .paginas-extras li:hover {
              border-color: #666;
              transition: ease 0.3s;
            }

            .paginas-extras button {
              float: right;
              background: #2ca62f;
              color: white;
              border: 0;
              min-width: 80px;
              padding: 10px 10px;
              border-radius: 3px;
              margin: 5px 3px;
              text-align: center;
              text-decoration: none;
              height: 34px;
              cursor: pointer;
            }

            .paginas-extras .status_menu {
              float: right;
              color: #900;
              margin-right: 5px;
            }

            .pc-tab ul {
              list-style: none;
              margin: 0;
              padding: 0;
            }

            .div-espaco {
              margin-bottom: 25px;
            }

            /* Paginas Editar */
            .cont-nav2 {
              width: 100%;
              margin: 30px 0;
              float: left;
              line-height: 1.5em;
              letter-spacing: 0.3px;
            }

            .cont-nav2 p {
              margin: 0;
            }

            .cont-nav2 .grid-4 {
              width: 33.33%;
            }

            .cont-nav2 .grid-6 {
              width: 50%;
            }

            /* Listagem */
            .bn_numero {
              float: left;
              text-align: center;
              width: 50px;
              font-size: 19px;
              font-weight: bold;
            }

            .bn_titulo {
              float: left;
              width: calc(100% - 150px);
              background-color: #f4f4f4;
              padding: 0 20px 0 20px;
            }

            .btn-green:hover {
              transition: ease 0.4s;
              background: #333;
            }

            .bn_naoutilizado {
              font-weight: bold;
              font-family: Arial;
              position: absolute;
              width: 100%;
              height: 100%;
              text-align: center;
              background: rgba(255, 255, 255, 0.8);
              z-index: 99;
            }

            .bn_titulo strong {
              font-size: 14px;
            }


            @media only screen and (max-width: 719px) {
              ul.navegacao {
                float: left;
                width: 100%;
                height: auto;
                margin: 40px 0px 30px 0px;
                padding: 0;
                border-bottom: 1px solid #dedede;
              }

              .navegacao li {
                list-style: none;
                float: left;
                width: 100%;
                padding: 0px 0;
                text-align: center;
              }

              .navegacao li a {
                list-style: none;
                float: left;
                width: 100%;
                text-decoration: none;
                padding: 15px 0px;
                margin: 0;
                text-align: center;
              }

              .navegacao li a:hover {
                background: #eff3f5;
                list-style: none;
                float: left;
                width: 100%;
                padding: 15px 0px;
                border-bottom: 0px solid #0db33b;
              }

              .navegacao li a.active {
                float: left;
                width: 100%;
                padding: 15px 0px;
                border-bottom: 4px solid #0db33b;
              }

              .cont-nav .grid-mob100 {
                width: 100%;
              }

              .cont-nav2 .grid-mob100 {
                width: 100%;
              }

              .imovel_item .grid-mob100 {
                width: 100%;
              }
            }
          </style>

          <ul class="navegacao">
            <li>
              <a href="configuracoes_modelo.php" class="active">Modelos</a>
            </li>
            <li>
              <a href="configuracoes_gerais_imagens_alt.php?cod=1">Logotipo</a>
            </li>
            <li>
              <a href="configuracoes_gerais_imagens.php">Banners</a>
            </li>
            <li>
              <a href="configuracoes_gerais_paginas.php" target="_blank">Páginas</a>
            </li>
          </ul>
          <div style="display:none;"><iframe scrolling="no" width="1" height="1" frameborder="0" name="ietapa"></iframe></div>
          <div class="cont-nav">
            <section>

              <div class="grid-12">
                <div class="item-pg">
                  <p>Este modelo possuí uma configuração extra, veja abaixo as opções disponíveis.
                  </p>
                </div>
              </div>



            </section>
          </div>


          <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tbody>
              <tr>
                <td height="430" valign="top">







                  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">


                    <tbody>
                      <tr>
                        <td>





                        </td>
                      </tr>
                      <tr>
                        <td>



                        </td>
                      </tr>
                      <tr>
                        <td>











                        </td>
                      </tr>
                      <tr>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                      </tr>
                      <tr>
                        <td>
































































































                          <table width="100%" border="0" cellspacing="2" cellpadding="2">
                            <form action="configuracoes_modelo_especificacoes.php?acao=gravar" method="post"></form>
                            <input name="nmodelo" type="hidden" value="31">
                            <tbody>
                              <tr>
                                <td>
                                  <table width="100%" border="0" cellspacing="2" cellpadding="2">
                                    <tbody>
                                      <tr bgcolor="#efefef" class="fonte_padrao">
                                        <td colspan="2" class="fonte_itens">Cor das vinhetas do site:</td>
                                      </tr>
                                      <tr>
                                        <td colspan="2">
                                          <table width="100%" border="0" cellpadding="0" cellspacing="0" class="fonte_padrao">
                                            <tbody>
                                              <tr>
                                                <td width="16%"><input name="corvinheta" type="text" class="color" id="color" value="027839" maxlength="6" autocomplete="off" style="background-image: none; background-color: rgb(2, 120, 57); color: rgb(255, 255, 255);"></td>
                                                <td width="84%">&lt;- selecionar cor</td>
                                              </tr>
                                            </tbody>
                                          </table>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td colspan="2">&nbsp;</td>
                                      </tr>
                                      <tr bgcolor="#efefef" class="fonte_padrao">
                                        <td colspan="2" class="fonte_itens">Imagem para fundo do site:</td>
                                      </tr>
                                      <tr>
                                        <td colspan="2"><select name="modelo" id="select" class="campo" style="width:50%">
                                            <option value="PE" selected="">Personalizado: usar imagens enviadas em: Menu - Logotipo e Banners, opção 5 (BANNER DE TOPO)</option>
                                            <option value="00">Imagens aleatórias para o fundo (ao acessar o site, irá carregar uma imagem)</option>
                                            <option value="01">Imagem 1 (Sala Apartamento)</option>
                                            <option value="02">Imagem 2 (Prédios)</option>
                                            <option value="03">Imagem 3 (Sala Apartamento Desfocado)</option>
                                            <option value="04">Imagem 4 (Prédios)</option>
                                            <option value="05">Imagem 5 (Pessoas Desfocado)</option>
                                            <option value="06">Imagem 6 (Sala Apartamento)</option>
                                            <option value="07">Imagem 7 (Sala)</option>
                                            <option value="08">Imagem 8 (Dormitório Desfocado)</option>
                                            <option value="09">Imagem 9 (Sala Desfocado)</option>
                                            <option value="10">Imagem 10 (Dormitório)</option>
                                            <option value="11">Imagem 11 (Varanda)</option>
                                          </select></td>
                                      </tr>
                                      <tr>
                                        <td colspan="2">&nbsp;</td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                              </tr>




                              <tr>
                                <td height="60" align="center"><input name="btngv" type="submit" class="btenviar1" value="Salvar Configurações"></td>
                              </tr>

                            </tbody>
                          </table>

                          <script language="javascript">
                            var vet_imagens = [];
                            vet_imagens[1] = 't22/imgs/site/banners/bg01.jpg';
                            vet_imagens[2] = 't22/imgs/site/banners/bg02.jpg';
                            vet_imagens[3] = 't22/imgs/site/banners/bg03.jpg';
                            vet_imagens[4] = 't22/imgs/site/banners/bg04.jpg';
                            vet_imagens[5] = 't22/imgs/site/banners/bg05.jpg';
                            vet_imagens[6] = 't22/imgs/site/banners/bg06.jpg';
                            vet_imagens[7] = 't22/imgs/site/banners/bg07.jpg';
                            vet_imagens[8] = 't22/imgs/site/banners/bg08.jpg';
                            vet_imagens[9] = 't22/imgs/site/banners/bg09.jpg';
                            vet_imagens[10] = 't22/imgs/site/banners/bg10.jpg';
                            vet_imagens[11] = 't22/imgs/site/banners/bg11.jpg';
                            visualiza_imagens(vet_imagens, 'select[name=modelo]');
                          </script>







































































                        </td>

                      </tr>
                    </tbody>
                  </table>











                </td>
              </tr>
            </tbody>
          </table>

        </div>
      </div>
    </section>
  </div>


  <a href="javascript:" id="return-to-top"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
  <footer>
    <div class="container" id="rodape">
      <div>
        <a href="inicial.php" title="Inicial"><img src="imgs/site/logo.png" alt="logo-site"></a>
      </div>

      <div class="identificacao">
        <p style="margin:0;">
          Identificação na página, IP: 201.74.160.136, 20/03/2023 - 10:47:53<br>
          ImobiBrasil Sites para Imobiliárias e Corretores - Todos os Direitos Reservados
        </p>
      </div>

      <div class="social">
        Siga-nos
        <a href="https://www.facebook.com/imobibrasil" target="_blank" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
        <a href="https://www.youtube.com/imobibrasilbr" target="_blank" title="YouTube"><i class="fa fa-youtube" aria-hidden="true"></i></a>
        <a href="http://www.imobibrasil.com.br/blog/" target="_blank" title="Blog"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>

      </div>

    </div>
  </footer>
  <div style="display:none;"><iframe name="refresh" frameborder="0" height="1" width="1" scrolling="no" src="refresh.php"></iframe></div>



  <script type="text/javascript" src="js/nav/script.js"></script>


  <script>
    $(window).scroll(function() {
      if ($(this).scrollTop() >= 50) { // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200); // Fade in the arrow
      } else {
        $('#return-to-top').fadeOut(200); // Else fade out the arrow
      }
    });
    $('#return-to-top').click(function() { // When arrow is clicked
      $('body,html').animate({
        scrollTop: 0 // Scroll to top of body
      }, 500);
    });
  </script>




</body>

</html>