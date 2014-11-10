<?php
include_once('header.php');
include_once('utils.php');

// Some dirty helper functions, may be moved into moved into a separate file
// or class if/when needed.

// Prints an FontAwesome icon
function icon($icon)
{
	echo "<span class='fa $icon'></span>";
}

// Prints an FontAwesome icon stack with two icons and a tooltip
function icon_stack($icon1, $icon2, $parentclass, $tooltip = '')
{
	echo "<span class='fa-stack $parentclass' data-toggle='tooltip' data-placement='bottom' title='$tooltip'>";
	icon($icon1);
	icon($icon2);
	echo "</span>";
}

// Prints an icon stack with the lower one being a double sized circle
// and the upper one being inversed
function circle_stack($icon, $class = '', $tooltip = '')
{
	icon_stack('fa-circle fa-stack-2x', "$icon fa-stack-1x fa-inverse", $class, $tooltip);
}
?>

<div class="text-center">
	<div class="page-header">
		<h2>Making beats has never been easier.</h2>
	</div>
	<div class="row">
		<div class="col-lg-4">
			<span class="fa-5x fa fa-bar-chart-o"></span>
			<h4>Produce music with your computer</h4>
			<p>by creating melodies and beats, synthesizing and mixing sounds, arranging samples and much more.</p>
		</div>
		<div class="col-lg-4">
			<span class="fa-5x fa fa-keyboard-o"></span>
			<h4>Playback instruments, samples and plugins</h4>
			<p>with a typing or MIDI keyboard in a user-friendly and modern interface.</p>
		</div>
		<div class="col-lg-4">
			<span class="fa-5x fa fa-puzzle-piece"></span>
			<h4>Bundled with ready-to-use stuff</h4>
			<p>from an assortment of instrument and effect plugins, presets and samples to VST and SoundFont support.</p>
		</div>
	</div>
	<br><br><br><br>

	<div class="page-header">
		<h2>Made by musicians, for musicians.</h2>
	</div>

	<div>
		<div>
			<a href="/download/#linux"><?php circle_stack('fa-linux', 'fa-3x', 'Download for Linux') ?></a>
			<a href="/download/#windows"><?php circle_stack('fa-windows', 'fa-3x', 'Download for Windows') ?></a>
			<a href="/download/#mac"><?php circle_stack('fa-apple', 'fa-3x', 'Download for OS X') ?></a>
			<h4>Take your pick</h4>
			<p>for Linux, Windows or Apple OS X</p>
		</div>
	</div>

	<br><br>
	<div class="page-header">
		<h2>Houston, we've had a problem.</h2>
		<h4>Standby, we've got you covered.</h4>
	</div>

	<div>
		<div>
			<a href="/forum/"><?php circle_stack('fa-comments', 'fa-3x', 'Visit our forum'); ?></a>&nbsp;
			<a href="http://facebook.com/makefreemusic"><?php circle_stack('fa-facebook', 'fa-3x', 'Visit our Facebook page'); ?></a>&nbsp;
			<a href="https://plus.google.com/u/0/113001340835122723950/posts">
				<?php circle_stack('fa-google', 'fa-3x', 'Visit our Google+ page'); ?></a>&nbsp;
			<a href="http://github.com/lmms/lmms"><?php circle_stack('fa-github', 'fa-3x', 'Visit our GitHub page'); ?></a>
			<h4>Ask your questions here</h4>
			<p>and answer a few questions while you're waiting.</p>
		</div>
	</div>
	<br>
	<p class="text-center visible-lg">View all community pages <a href="/community/">here</a>.</p>
	<br>
	<div class="page-header">
		<h2>Sharing means caring.</h2>
	</div>

	<div>
		<div>
			<a href="https://soundcloud.com/groups/lmms">
				<?php circle_stack('fa-soundcloud', 'fa-3x', 'Visit our Soundcloud group'); ?></a>
			<a href="/lsp/"><?php circle_stack('fa-volume-down', 'fa-3x', 'Visit the LMMS Sharing Platform (LSP)'); ?></a>
			<h4>Don't be modest,</h4>
			<p>show us your creations.</p>
		</div>
	</div>
	<br><br>
	<div class="overflow-hidden">
		<div class="page-header">
			<h2>Take a peek</h2>
		</div>
		<div class="col-lg-4">
			<h4>Overall Project</h4>
			<?php make_reflection('img/ss_proj.png', NULL, "white"); ?>
		</div>
		<div class="col-lg-4">
			<h4>Song Editor</h4>
			<?php make_reflection('img/ss_song.png', NULL, "white"); ?>
		</div>
		<div class="col-lg-4">
			<h4>Native Instruments</h4>
			<?php make_reflection('img/ss_instr.png', NULL, "white"); ?>
		</div>
	</div>



	<br class="hidden-lg">
	<a data-toggle="collapse" href="#screenshots" aria-expanded="false" aria-controls="screenshots">
		Show more screenshots<br><i class="fa fa-angle-down"></i></a>

	<div id="screenshots" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
		<?php include('screenshots/index.php'); ?>
	</div>

	<br><br>
</div>

<div>
	<div class="page-header text-center">
		<h2>Featuring</h2>
	</div>
	<div class="col-lg-4">
		<h3 class="text-center"><span class="fa-2x fa fa-check-square-o"></span><br>Core Functionality</h3>
		<ul>
			<li>Compose music on Windows, Linux and Apple OS&nbsp;X</li>
			<li>Sequence, compose, mix and automate songs in one simple interface</li>
			<li>Note playback via MIDI or typing keyboard</li>
			<li>Consolidate instrument tracks using Beat+Bassline Editor</li>
			<li>Fine tune patterns, notes, chords and melodies using Piano Roll Editor</li>
			<li>Full user-defined track-based automation and computer-controlled automation sources</li>
			<li>Import of MIDI files, Hydrogen project files and FL Studio ® project files</li>
		</ul>
	</div>
	<div class="col-lg-4">
		<h3 class="text-center"><span class="fa-2x fa fa fa-bar-chart-o"></span><br>Effects Mixing</h3>
		<ul>
			<li>Drop-in LADSPA plug-in support</li>
			<li>Drop-in VST ® effect plug-in support on (Linux and Windows)</li>
			<li>Built-in compressor, limiter, delay, reverb, distortion, EQ, bass-enhancer</li>
			<li>Bundled graphic and parametric equalizers</li>
			<li>Built-in visualization/spectrum analyser</li>
		</ul>
	</div>
	<div class="col-lg-4">
		<h3 class="text-center"><span class="fa-2x fa fa fa-music"></span><br>Musical Instruments</h3>
		<ul>
			<li>Built-in 32-bit VST instrument support</li>
			<li>Built-in 64-bit VST instrument support with 32-bit VST bridge (64-bit Windows)</li>
			<li>Roland ® TB-303 style monophonic bass synthesizer</li>
			<li>Embedded ZynAddSubFx:  Polyphonic, mutlitimbral, microtonal, multi-voice additive, subtractive and pad synthesis all in one powerful plugin</li>
			<li>Native Commodore 64 ® SID microchip/instrument emulation</li>
			<li>Native SoundFont ® support (SF2), the industry standard for high quality instrument patches and banks</li>
			<li>Nintendo ®, GameBoy ® and game sound effect emulation</li>
			<li>2 built-in oscillator-based synthesizers</li>
			<li>2 built-in wavetable-based synthesizers</li>
			<li>Gravis UltraSound ® GUS Patch support</li>
		</ul>
	</div>
</div>

<script type="text/javascript">
$(document).ready(function(){
    $("[data-toggle=tooltip]").tooltip();
});
</script>

<br>
<?php include('footer.php'); ?>
