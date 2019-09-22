<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" />
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>

	<form enctype="multipart/form-data" action="index.php?ToDo={{ FormAction|safe }}" onsubmit="return ValidateForm(CheckNewsForm)" id="frmNews" method="post">
	<input type="hidden" name="newsId" value="{{ NewsId|safe }}">
	<div class="BodyContainer">
	<table class="OuterPanel">
	  <tr>
		<td class="Heading1" id="tdHeading">{{ Title|safe }}</td>
		</tr>
		<tr>
		<td class="Intro">
			<p>{{ Intro|safe }}</p>
			{{ Message|safe }}
			<p><input type="submit" name="SubmitButton1" value="{% lang 'Save' %}" class="FormButton">&nbsp; <input type="button" name="CancelButton1" value="{% lang 'Cancel' %}" class="FormButton" onclick="ConfirmCancel()"></p>
		</td>
	  </tr>
		<tr>
			<td>
			  <table class="Panel">
			  	<tr>
				  <td class="Heading2" colspan=2>{% lang 'NewNewsDetails' %}</td>
				</tr>
				<tr>
					<td class="FieldLabel">
						<span class="Required">*</span>&nbsp;{% lang 'NewsTitle' %}:
					</td>
					<td>
						<input type="text" id="newstitle" name="newstitle" class="Field400" value="{{ NewsTitle|safe }}">
					</td>
				</tr>
                <tr>
                    <td class="FieldLabel">
                        &nbsp;&nbsp;&nbsp;{% lang 'NewsDate' %}:
                    </td>
                    <td>
                        <input type="text" id="newsdate" name="newsdate" class="Field400" readonly value="{{ NewsDate|safe }}">
                    </td>
                </tr>
				<tr>
					<td class="FieldLabel">
						&nbsp;&nbsp;&nbsp;{% lang 'SearchKeywords' %}:
					</td>
					<td>
						<input type="text" id="newssearchkeywords" name="newssearchkeywords" class="Field400" value="{{ NewsSearchKeywords|safe }}">
						<img onmouseout="HideHelp('searchkeywords');" onmouseover="ShowHelp('searchkeywords', '{% lang 'SearchKeywords' %}', '{% lang 'SearchKeywordsHelp' %}')" src="images/help.gif" width="24" height="16" border="0">
						<div style="display:none" id="searchkeywords"></div>
					</td>
				</tr>
                <tr>
                    <td class="FieldLabel">
                        &nbsp;&nbsp;&nbsp;{% lang 'NewsShortDescription' %}:
                    </td>
                    <td>
                        <textarea id="short_description" class="Field400" rows="4" name="short_description">{{ short_description|safe }}</textarea>
                    </td>
                </tr>
				<tr>
					<td class="FieldLabel">
						&nbsp;&nbsp;&nbsp;{% lang 'Visible' %}:
					</td>
					<td>
						<input type="checkbox" id="newsvisible" name="newsvisible" value="1" {{ NewsVisible|safe }}> <label for="newsvisible">{% lang 'YesNewsVisible' %}</label>
					</td>
				</tr>
				<tr>
					<td colspan="2" class="Gap"></td>
				</tr>
				<tr>
					<td colspan="2" class="Gap"></td>
				</tr>
			  	<tr>
				  <td class="Heading2" colspan=2>Facebook Optimization</td>
				</tr>
				<tr>
					<td class="FieldLabel">
						Image(s):
					</td>
					<td valign="middle" class="">
                    	{{ currentImages|safe }}
						<input type="file" id="newsfbimage[]" name="newsfbimage[]" class="" >
                      	<a class="addMore" href="#" ><img src="images/addicon.png" alt="More" title="More" /> </a>

                        <div class="extraImages"></div>

                    </td>
				</tr>
				<tr>
					<td colspan="2" class="Gap"></td>
				</tr>
				<tr>
					<td colspan="2" class="Gap"></td>
				</tr>
				<tr>
				  <td class="Heading2" colspan=2>{% lang 'PostContent' %}</td>
				</tr>
				<tr>
					<td colspan="2" style="padding-top:5px">
						{{ WYSIWYG|safe }}
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

		$(function(){
			var counter = 0;
			$(".addMore").live('click', function(){
				
				$(".extraImages").append("<input class='image"+counter+" ' type='file' id='newsfbimage[]' name='newsfbimage[]' > <a class='addMore image"+counter+"' href='#' > <img src='images/addicon.png' alt='More' title='More' /> </a> <a href='#' class='removeImage' id='"+counter+"'> <img src='images/delicon.png' alt='Remove' title='Remove' /> <br/> </a>");
				
				counter++;
				
				return false;
			
			});
		
			$(".removeImage").live('click', function(){
				var number = $(this).attr('id');
				$('.image'+number).remove();
				$(this).remove();		
				return false;
			})

		});

		function ConfirmCancel()
		{
			if(confirm("{% lang 'ConfirmCancelNews' %}"))
				document.location.href = "index.php?ToDo=viewNews";
		}

		function CheckNewsForm()
		{
			var title = g("newstitle");

			if(g("wysiwyg"))
				var wysiwyg = g("wysiwyg"); // Text area
			else
				var wysiwyg = g("wysiwyg_html"); // DevEdit

			if(IsWysiwygEditorEmpty(wysiwyg.value))
			{
				alert("{% lang 'EnterNewsContent' %}");
				return false;
			}

			if(title.value == "")
			{
				alert("{% lang 'EnterNewsTitle' %}");
				title.focus();
				return false;
			}

			// Everything is OK
			return true;
		}

$(document).ready(function() 
{ 
    // Capture the Date from User Selection
    // http://codeasp.net/assets/demos/blogs/jquery-datepicker-set-date-range-of-start-date-and-end-date.aspx
    var newsdate = $('#newsdate');

    $.datepicker.setDefaults({ dateFormat: 'dd-mm-yy', changeMonth: true, changeYear: true, showOtherMonths: true, selectOtherMonths: true });

    newsdate.datepicker();
    
});
	</script>
