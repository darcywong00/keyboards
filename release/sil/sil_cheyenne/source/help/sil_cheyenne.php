﻿<?php
  $pagename = 'Cheyenne Keyboard Help';
  $pagetitle = $pagename;
  $pagestyle = <<<END
        .key { 
            float: left;
            display: block; 
            position: relative;
            overflow: hidden;
            height: 35px;
            
                margin: 2px 0px 0px 4px;
              
        }
        
        #K_SPACE {
          width: 234px; 
          
            background-image: url('key-space.gif'); 
          
        }

        #K_BKSLASH {
          width: 42px; 
          
            background-image: url('key-bkslash.gif'); 
          
        }
        
        #K_oE2 {
          
            display:none;
          
        }
        
        #K_SHIFTL {
          width: 80px;background-image: url('key-shiftl.gif');
        }
        
        .plain {
          
            background-image: url('key-plain.gif');
          
          background-repeat: no-repeat;
          width: 34px;
        }
        
        .special {
          background-repeat: no-repeat;
          
        }
        
        .keycap {
          font: bold 7pt Arial; 
          position: absolute; 
          left: 6px; 
          top: 6px;
        }
        
        .key .keycap {          
          display: none;
        }
        
        .special .keycap {
          display: block;
        }
        
        .keytext {
          
					font:
						12pt
							 
						"Arial"; 
          position: absolute; 
          display: block;
          right: 5px;
          bottom: 4px;
          color: blue;
        }
/* Language Examples */
p samp {font-family: Times New Roman; font-size:20pt; line-height:.8em;}
p kbd {color:black; font:9pt Arial; border:solid 1px grey; background:#ccc; margin:0px 1px; padding:0px 3px; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px;}
END;
  require_once('header.php');
?>

  <p>This keyboard allows you to type all the letters and special symbols used in the Cheyenne alphabet.</p>
  <h2>Keyboard layout</h2>
<h3 style="clear:left">Unicode : Unshifted</h3>
<div class="key plain" id="K_BKQUOTE">
<div class="keycap">`</div>
<div class="keytext">`</div>
</div>
<div class="key plain" id="K_1">
<div class="keycap">1</div>
<div class="keytext">1</div>
</div>
<div class="key plain" id="K_2">
<div class="keycap">2</div>
<div class="keytext">2</div>
</div>
<div class="key plain" id="K_3">
<div class="keycap">3</div>
<div class="keytext">3</div>
</div>
<div class="key plain" id="K_4">
<div class="keycap">4</div>
<div class="keytext">4</div>
</div>
<div class="key plain" id="K_5">
<div class="keycap">5</div>
<div class="keytext">5</div>
</div>
<div class="key plain" id="K_6">
<div class="keycap">6</div>
<div class="keytext">6</div>
</div>
<div class="key plain" id="K_7">
<div class="keycap">7</div>
<div class="keytext">7</div>
</div>
<div class="key plain" id="K_8">
<div class="keycap">8</div>
<div class="keytext">8</div>
</div>
<div class="key plain" id="K_9">
<div class="keycap">9</div>
<div class="keytext">9</div>
</div>
<div class="key plain" id="K_0">
<div class="keycap">0</div>
<div class="keytext">0</div>
</div>
<div class="key plain" id="K_HYPHEN">
<div class="keycap">-</div>
<div class="keytext">-</div>
</div>
<div class="key plain" id="K_EQUAL">
<div class="keycap">=</div>
<div class="keytext">=</div>
</div>
<div class="key special" id="" style="
        width: 60px;
        
          background-image: url('key-backspace.gif');
          ">
<div class="keycap">Backspace</div>
</div><br style="clear: left"><div class="key special" id="" style="
        width: 52px;
        
          background-image: url('key-tab.gif');
          ">
<div class="keycap">Tab</div>
</div>
<div class="key plain" id="K_Q">
<div class="keycap">Q</div>
<div class="keytext">q</div>
</div>
<div class="key plain" id="K_W">
<div class="keycap">W</div>
<div class="keytext">w</div>
</div>
<div class="key plain" id="K_E">
<div class="keycap">E</div>
<div class="keytext">e</div>
</div>
<div class="key plain" id="K_R">
<div class="keycap">R</div>
<div class="keytext">r</div>
</div>
<div class="key plain" id="K_T">
<div class="keycap">T</div>
<div class="keytext">t</div>
</div>
<div class="key plain" id="K_Y">
<div class="keycap">Y</div>
<div class="keytext">y</div>
</div>
<div class="key plain" id="K_U">
<div class="keycap">U</div>
<div class="keytext">u</div>
</div>
<div class="key plain" id="K_I">
<div class="keycap">I</div>
<div class="keytext">i</div>
</div>
<div class="key plain" id="K_O">
<div class="keycap">O</div>
<div class="keytext">o</div>
</div>
<div class="key plain" id="K_P">
<div class="keycap">P</div>
<div class="keytext">p</div>
</div>
<div class="key plain" id="K_LBRKT">
<div class="keycap">[</div>
<div class="keytext">[</div>
</div>
<div class="key plain" id="K_RBRKT">
<div class="keycap">]</div>
<div class="keytext">]</div>
</div>
<div class="key plain" id="K_BKSLASH">
<div class="keycap">\</div>
<div class="keytext">\</div>
</div><br style="clear: left"><div class="key special" id="" style="
        width: 62px;
        
          background-image: url('key-capslock.gif');
          ">
<div class="keycap">Caps Lock</div>
</div>
<div class="key plain" id="K_A">
<div class="keycap">A</div>
<div class="keytext">a</div>
</div>
<div class="key plain" id="K_S">
<div class="keycap">S</div>
<div class="keytext">s</div>
</div>
<div class="key plain" id="K_D">
<div class="keycap">D</div>
<div class="keytext">d</div>
</div>
<div class="key plain" id="K_F">
<div class="keycap">F</div>
<div class="keytext">f</div>
</div>
<div class="key plain" id="K_G">
<div class="keycap">G</div>
<div class="keytext">g</div>
</div>
<div class="key plain" id="K_H">
<div class="keycap">H</div>
<div class="keytext">h</div>
</div>
<div class="key plain" id="K_J">
<div class="keycap">J</div>
<div class="keytext">j</div>
</div>
<div class="key plain" id="K_K">
<div class="keycap">K</div>
<div class="keytext">k</div>
</div>
<div class="key plain" id="K_L">
<div class="keycap">L</div>
<div class="keytext">l</div>
</div>
<div class="key plain" id="K_COLON">
<div class="keycap">;</div>
<div class="keytext">;</div>
</div>
<div class="key plain" id="K_QUOTE">
<div class="keycap">'</div>
<div class="keytext">'</div>
</div>
<div class="key special" id="" style="
        width: 70px;
        
          background-image: url('key-enter.gif');
          ">
<div class="keycap">Enter</div>
</div><br style="clear: left"><div class="key special" id="K_SHIFTL" style="
        width: px;
        ">
<div class="keycap">Shift</div>
</div>
<div class="key plain" id="K_oE2">
<div class="keycap">\</div>
</div>
<div class="key plain" id="K_Z">
<div class="keycap">Z</div>
<div class="keytext">z</div>
</div>
<div class="key plain" id="K_X">
<div class="keycap">X</div>
<div class="keytext">x</div>
</div>
<div class="key plain" id="K_C">
<div class="keycap">C</div>
<div class="keytext">c</div>
</div>
<div class="key plain" id="K_V">
<div class="keycap">V</div>
<div class="keytext">v</div>
</div>
<div class="key plain" id="K_B">
<div class="keycap">B</div>
<div class="keytext">b</div>
</div>
<div class="key plain" id="K_N">
<div class="keycap">N</div>
<div class="keytext">n</div>
</div>
<div class="key plain" id="K_M">
<div class="keycap">M</div>
<div class="keytext">m</div>
</div>
<div class="key plain" id="K_COMMA">
<div class="keycap">,</div>
<div class="keytext">,</div>
</div>
<div class="key plain" id="K_PERIOD">
<div class="keycap">.</div>
<div class="keytext">.</div>
</div>
<div class="key plain" id="K_SLASH">
<div class="keycap">/</div>
<div class="keytext">/</div>
</div>
<div class="key special" id="" style="
        width: 90px;
        
          background-image: url('key-shiftr.gif');
          ">
<div class="keycap">Shift</div>
</div><br style="clear: left"><div class="key special" id="" style="
        width: 60px;
        
          background-image: url('key-ctrll.gif');
          ">
<div class="keycap">Ctrl</div>
</div>
<div style="width: 30px; display: block; float: left;"> </div>
<div class="key special" id="" style="
        width: 50px;
        
          background-image: url('key-altl.gif');
          ">
<div class="keycap">Alt</div>
</div>
<div class="key plain" id="K_SPACE">
<div class="keycap"> </div>
</div>
<div class="key special" id="" style="
        width: 50px;
        
          background-image: url('key-altr.gif');
          ">
<div class="keycap">Alt</div>
</div>
<div style="width: 54px; display: block; float: left;"> </div>
<div class="key special" id="" style="
        width: 60px;
        
          background-image: url('key-ctrlr.gif');
          ">
<div class="keycap">Ctrl</div>
</div><br style="clear: left"><h3 style="clear:left">Unicode : Shift</h3>
<div class="key plain" id="K_BKQUOTE">
<div class="keycap">`</div>
<div class="keytext">~</div>
</div>
<div class="key plain" id="K_1">
<div class="keycap">1</div>
<div class="keytext">!</div>
</div>
<div class="key plain" id="K_2">
<div class="keycap">2</div>
<div class="keytext">@</div>
</div>
<div class="key plain" id="K_3">
<div class="keycap">3</div>
<div class="keytext">#</div>
</div>
<div class="key plain" id="K_4">
<div class="keycap">4</div>
<div class="keytext">$</div>
</div>
<div class="key plain" id="K_5">
<div class="keycap">5</div>
<div class="keytext">%</div>
</div>
<div class="key plain" id="K_6">
<div class="keycap">6</div>
<div class="keytext">^</div>
</div>
<div class="key plain" id="K_7">
<div class="keycap">7</div>
<div class="keytext">&amp;</div>
</div>
<div class="key plain" id="K_8">
<div class="keycap">8</div>
<div class="keytext">*</div>
</div>
<div class="key plain" id="K_9">
<div class="keycap">9</div>
<div class="keytext">(</div>
</div>
<div class="key plain" id="K_0">
<div class="keycap">0</div>
<div class="keytext">)</div>
</div>
<div class="key plain" id="K_HYPHEN">
<div class="keycap">-</div>
<div class="keytext">_</div>
</div>
<div class="key plain" id="K_EQUAL">
<div class="keycap">=</div>
<div class="keytext">+</div>
</div>
<div class="key special" id="" style="
        width: 60px;
        
          background-image: url('key-backspace.gif');
          ">
<div class="keycap">Backspace</div>
</div><br style="clear: left"><div class="key special" id="" style="
        width: 52px;
        
          background-image: url('key-tab.gif');
          ">
<div class="keycap">Tab</div>
</div>
<div class="key plain" id="K_Q">
<div class="keycap">Q</div>
<div class="keytext">Q</div>
</div>
<div class="key plain" id="K_W">
<div class="keycap">W</div>
<div class="keytext">W</div>
</div>
<div class="key plain" id="K_E">
<div class="keycap">E</div>
<div class="keytext">E</div>
</div>
<div class="key plain" id="K_R">
<div class="keycap">R</div>
<div class="keytext">R</div>
</div>
<div class="key plain" id="K_T">
<div class="keycap">T</div>
<div class="keytext">T</div>
</div>
<div class="key plain" id="K_Y">
<div class="keycap">Y</div>
<div class="keytext">Y</div>
</div>
<div class="key plain" id="K_U">
<div class="keycap">U</div>
<div class="keytext">U</div>
</div>
<div class="key plain" id="K_I">
<div class="keycap">I</div>
<div class="keytext">I</div>
</div>
<div class="key plain" id="K_O">
<div class="keycap">O</div>
<div class="keytext">O</div>
</div>
<div class="key plain" id="K_P">
<div class="keycap">P</div>
<div class="keytext">P</div>
</div>
<div class="key plain" id="K_LBRKT">
<div class="keycap">[</div>
<div class="keytext">{</div>
</div>
<div class="key plain" id="K_RBRKT">
<div class="keycap">]</div>
<div class="keytext">}</div>
</div>
<div class="key plain" id="K_BKSLASH">
<div class="keycap">\</div>
<div class="keytext">|</div>
</div><br style="clear: left"><div class="key special" id="" style="
        width: 62px;
        
          background-image: url('key-capslock.gif');
          ">
<div class="keycap">Caps Lock</div>
</div>
<div class="key plain" id="K_A">
<div class="keycap">A</div>
<div class="keytext">A</div>
</div>
<div class="key plain" id="K_S">
<div class="keycap">S</div>
<div class="keytext">S</div>
</div>
<div class="key plain" id="K_D">
<div class="keycap">D</div>
<div class="keytext">D</div>
</div>
<div class="key plain" id="K_F">
<div class="keycap">F</div>
<div class="keytext">F</div>
</div>
<div class="key plain" id="K_G">
<div class="keycap">G</div>
<div class="keytext">G</div>
</div>
<div class="key plain" id="K_H">
<div class="keycap">H</div>
<div class="keytext">H</div>
</div>
<div class="key plain" id="K_J">
<div class="keycap">J</div>
<div class="keytext">J</div>
</div>
<div class="key plain" id="K_K">
<div class="keycap">K</div>
<div class="keytext">K</div>
</div>
<div class="key plain" id="K_L">
<div class="keycap">L</div>
<div class="keytext">L</div>
</div>
<div class="key plain" id="K_COLON">
<div class="keycap">;</div>
<div class="keytext">:</div>
</div>
<div class="key plain" id="K_QUOTE">
<div class="keycap">'</div>
<div class="keytext">"</div>
</div>
<div class="key special" id="" style="
        width: 70px;
        
          background-image: url('key-enter.gif');
          ">
<div class="keycap">Enter</div>
</div><br style="clear: left"><div class="key special" id="K_SHIFTL" style="
        width: px;
        ">
<div class="keycap">Shift</div>
</div>
<div class="key plain" id="K_oE2">
<div class="keycap">\</div>
</div>
<div class="key plain" id="K_Z">
<div class="keycap">Z</div>
<div class="keytext">Z</div>
</div>
<div class="key plain" id="K_X">
<div class="keycap">X</div>
<div class="keytext">X</div>
</div>
<div class="key plain" id="K_C">
<div class="keycap">C</div>
<div class="keytext">C</div>
</div>
<div class="key plain" id="K_V">
<div class="keycap">V</div>
<div class="keytext">V</div>
</div>
<div class="key plain" id="K_B">
<div class="keycap">B</div>
<div class="keytext">B</div>
</div>
<div class="key plain" id="K_N">
<div class="keycap">N</div>
<div class="keytext">N</div>
</div>
<div class="key plain" id="K_M">
<div class="keycap">M</div>
<div class="keytext">M</div>
</div>
<div class="key plain" id="K_COMMA">
<div class="keycap">,</div>
<div class="keytext">&lt;</div>
</div>
<div class="key plain" id="K_PERIOD">
<div class="keycap">.</div>
<div class="keytext">&gt;</div>
</div>
<div class="key plain" id="K_SLASH">
<div class="keycap">/</div>
<div class="keytext">?</div>
</div>
<div class="key special" id="" style="
        width: 90px;
        
          background-image: url('key-shiftr.gif');
          ">
<div class="keycap">Shift</div>
</div><br style="clear: left"><div class="key special" id="" style="
        width: 60px;
        
          background-image: url('key-ctrll.gif');
          ">
<div class="keycap">Ctrl</div>
</div>
<div style="width: 30px; display: block; float: left;"> </div>
<div class="key special" id="" style="
        width: 50px;
        
          background-image: url('key-altl.gif');
          ">
<div class="keycap">Alt</div>
</div>
<div class="key plain" id="K_SPACE">
<div class="keycap"> </div>
</div>
<div class="key special" id="" style="
        width: 50px;
        
          background-image: url('key-altr.gif');
          ">
<div class="keycap">Alt</div>
</div>
<div style="width: 54px; display: block; float: left;"> </div>
<div class="key special" id="" style="
        width: 60px;
        
          background-image: url('key-ctrlr.gif');
          ">
<div class="keycap">Ctrl</div>
</div><br style="clear: left">

<p>You can get the dot (whisper mark) over the vowel by typing the <kbd>^</kbd> mark (above the 6) then the vowel. <kbd>^</kbd><kbd>a</kbd> gives you <samp>ȧ</samp>. This is available on a, A, e, E, o, and O characters.</p>
<p>You can get the esh mark by typing the <kbd>^</kbd> mark (above the 6) then the character. <kbd>^</kbd><kbd>s</kbd> gives you <samp>š</samp>. This is available on s, S, z, and Z characters.</p>
<p>You can get the grave accent mark over the vowel by typing the <kbd>`</kbd> mark then the vowel. <kbd>`</kbd><kbd>a</kbd> gives you <samp>à</samp>. This is available on all vowel (aeiouAEIOU) characters.</p>
<p>You can get the acute accent mark over the vowel by typing the <kbd>[</kbd> mark then the vowel. <kbd>[</kbd><kbd>a</kbd> gives you <samp>á</samp>. This is available on all vowel (aeiouAEIOU) characters.</p>
<p>You can get the mid pitch mark over the vowel by typing the <kbd>~</kbd> mark then the vowel. <kbd>~</kbd><kbd>a</kbd> gives you <samp>ā</samp>. This is available on a, A, e, E, o, and O characters.</p>
