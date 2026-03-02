

	<context name="Root">

		<!-- ## ToggleShowDesktop -->

<?php
/*
		<!-- Mouse Button Left Click //-->
		<mousebind button="Left" action="Press">
			<action name="ToggleShowDesktop"/>
		</mousebind>
*/
?>

		<!-- Mouse Button Left DoubleClick //-->
		<mousebind button="Left" action="DoubleClick">
			<action name="ToggleShowDesktop"/>
		</mousebind>


		<!-- ## Menus -->

		<!-- Mouse Button Middle Click //-->
		<mousebind button="Middle" action="Press">
			<action name="ShowMenu">
				<menu>client-list-combined-menu</menu>
			</action>
		</mousebind>

<?php
/*
		<!-- Mouse Button Right Click //-->
		<mousebind button="Right" action="Press">
			<action name="ShowMenu">
				<menu>root-menu</menu>
			</action>
		</mousebind>
*/
?>

		<!-- Mouse Button Right Click //-->
		<mousebind button="Right" action="Press">
			<action name="Execute">
				<startupnotify>
					<enabled>false</enabled>
					<name>MainMenu</name>
				</startupnotify>
				<command>jgmenu_run</command>
			</action>
		</mousebind>

		<!-- Alt + Mouse Button Right Click //-->
		<mousebind button="A-Right" action="Press">
			<action name="ShowMenu">
				<menu>root-menu</menu>
			</action>
		</mousebind>

	</context>

<?php
/*

## Help

* http://openbox.org/wiki/Help:Actions#ToggleShowDesktop
* http://openbox.org/wiki/Help:Actions#ShowMenu
* http://openbox.org/wiki/Help:Configuration#Mouse
* http://openbox.org/wiki/Help:Bindings#Mouse_bindings

*/
?>
