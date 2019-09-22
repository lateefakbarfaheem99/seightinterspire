<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" />
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>

	<form enctype="multipart/form-data" action="index.php?ToDo={{ FormAction|safe }}" onsubmit="return ValidateForm(CheckGalleryForm)" id="frmGallery" method="post">
	<input type="hidden" name="galId" value="{{ GalleryId|safe }}">
	<div class="BodyContainer">
	<table class="OuterPanel">
	  <tr>
		<td class="Heading1" id="tdHeading">{{ Title|safe }}</td>
		</tr>
		<tr>
		<td class="Intro">
			<p>{{ Intro|safe }}</p>
			{{ Message|safe }}
		</td>
	  </tr>
		<tr>
			<td>
			  <table class="Panel">
			  	<tr>
				  <td class="Heading2" colspan=2>{% lang 'NewGalleryDetails' %}</td>
				</tr>
				<tr>
					<td class="FieldLabel">
						<span class="Required">*</span>&nbsp;{% lang 'GalleryTitle' %}:
					</td>
					<td>
						<input type="text" id="galtitle" name="galtitle" class="Field400" value="{{ GalleryTitle|safe }}">
					</td>
				</tr>
				<tr>
					<td class="Gap" colspan="2"><input type="submit" name="SubmitButton1" value="{% lang 'Save' %}" class="FormButton">&nbsp; <input type="button" name="CancelButton1" value="{% lang 'Cancel' %}" class="FormButton" onclick="ConfirmCancel()">
					</td>
				</tr>
				<tr><td class="Gap"></td></tr>
				<tr><td class="Gap"></td></tr>
				<tr><td class="Sep" colspan="2"></td></tr>
			 </table>
			</td>
		</tr>
	</table>

	</div>
	</form>

	<script type="text/javascript">

		function ConfirmCancel()
		{
			if(confirm("{% lang 'ConfirmCancelGallery' %}"))
				document.location.href = "index.php?ToDo=manageGalleryImages";
		}

		function CheckGalleryForm()
		{
			var title = g("galtitle");

			if(title.value == "")
			{
				alert("{% lang 'EnterGalleryTitle' %}");
				title.focus();
				return false;
			}

			// Everything is OK
			return true;
		}
	</script>
