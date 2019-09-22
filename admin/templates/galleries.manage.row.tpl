
	<tr class="GridRow" onmouseover="this.className='GridRowOver'" onmouseout="this.className='GridRow'">
		<td align="center" style="width:25px">
			<input type="checkbox" name="gallery[]" value="{{ GalleryID|safe }}">
		</td>
		<td width="550" class="{{ SortedFieldTitleClass|safe }}">
			{{ Title|safe }}
		</td>
		<td style="width:250px" class="{{ SortedFieldCountClass|safe }}">
			{{ Count|safe }}
		</td>
		<td>
			{{ EditGalleryLink|safe }}&nbsp;&nbsp;&nbsp;
            {{UploadGalleryImageLink|safe}}&nbsp;&nbsp;&nbsp;
            {{ PreviewGalleryLink|safe }}&nbsp;&nbsp;&nbsp;
		</td>
	</tr>