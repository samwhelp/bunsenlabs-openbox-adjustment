

	<!-- ## Reconfigure //-->
	<keybind key="A-S-c">
		<action name="Reconfigure" />
	</keybind>


	<!-- ## Lock //-->
	<keybind key="A-C-z">
		<action name="Execute">
			<command>bl-lock</command>
		</action>
	</keybind>


	<!-- ## Restart //-->
	<keybind key="A-S-z">
		<action name="Execute">
			<startupnotify>
				<enabled>false</enabled>
				<name>Exit</name>
			</startupnotify>
			<command>bl-exit</command>
		</action>
	</keybind>

<?php
/*
	<keybind key="A-S-z">
		<action name="Restart" />
	</keybind>
*/
?>


	<!-- ## Logout //-->
	<keybind key="A-S-x">
		<action name="Execute">
			<command>bl-exit</command>
		</action>
	</keybind>

	<keybind key="A-C-x">
		<action name="Exit" />
	</keybind>

	<keybind key="A-C-Delete">
		<action name="Exit" />
	</keybind>
