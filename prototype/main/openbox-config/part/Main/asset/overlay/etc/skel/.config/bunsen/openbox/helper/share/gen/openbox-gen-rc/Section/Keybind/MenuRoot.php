

	<keybind key="W-space">
		<action name="ShowMenu">
			<menu>root-menu</menu>
		</action>
	</keybind>

<?php
/*
	<keybind key="Alt-F1">
		<action name="ShowMenu">
			<menu>root-menu</menu>
		</action>
	</keybind>
*/
?>

	<keybind key="Alt-F1">
		<action name="Execute">
			<startupnotify>
				<enabled>false</enabled>
				<name>MainMenu</name>
			</startupnotify>
			<command>jgmenu_run</command>
		</action>
	</keybind>

<?php
/*
	<keybind key="A-C-a">
		<action name="ShowMenu">
			<menu>root-menu</menu>
		</action>
	</keybind>

	<keybind key="W-C-a">
		<action name="ShowMenu">
			<menu>root-menu</menu>
		</action>
	</keybind>
*/
?>
