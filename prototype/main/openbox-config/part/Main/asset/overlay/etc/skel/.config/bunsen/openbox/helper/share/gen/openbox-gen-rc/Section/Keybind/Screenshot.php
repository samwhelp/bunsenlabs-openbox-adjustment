

	<!-- ## via xfce4-screenshooter //-->
	<keybind key="Print">
		<action name="Execute">
			<command>xfce4-screenshooter --fullscreen</command>
		</action>
	</keybind>

	<keybind key="A-Print">
		<action name="Execute">
			<command>xfce4-screenshooter</command>
		</action>
	</keybind>

	<keybind key="W-Print">
		<action name="Execute">
			<command>xfce4-screenshooter --window</command>
		</action>
	</keybind>

	<keybind key="C-Print">
		<action name="Execute">
			<command>xfce4-screenshooter --region</command>
		</action>
	</keybind>


<?php
/*
	<!-- Take a screenshot of the current window with scrot when Alt+Print are pressed -->
	<keybind key="A-Print">
		<action name="Execute">
			<command>scrot -s</command>
		</action>
	</keybind>

	<!-- Launch scrot when Print is pressed -->
	<keybind key="Print">
		<action name="Execute">
			<command>scrot</command>
		</action>
	</keybind>

*/
?>


<?php
/*

## Help

* $ man scrot

*/
?>
