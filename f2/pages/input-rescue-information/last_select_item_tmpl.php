<table class="table table-bordered inner-textfield" style="width:100%;layout:fixed;">
    <tr>
        <thead>
        <th></th>
        <th><strong>Name <br> নাম:</strong></th>
        <th><strong>Scientific name <br> বৈজ্ঞানিক নাম:</strong></th> 
        <th><strong>IUCN <br> আইইউসিএন: </strong></th>
        <th><strong>IUCN (Bangladesh) <br> আইইউসিএন (বাংলাদেশ) </strong></th>
        <th><strong>CITES <br> সাইটিস:</strong></th>
        <th><strong>Schedule <br> তফসিল:</strong></th>
         </thead>  
    </tr>
    <tr>
        <tbody>
         <td>
                <a data-fancybox href="https://wcs.softlh.com/species-image/<%= id %>.webp" ><img src="https://wcs.softlh.com/species-image/<%= id %>.webp" class="spce_image_bg" alt="" id="image" style="height:100px; width:100px;"></a>
            </td>
        <td><%= english_name %> <br> <%= bangla_name %> </td>
        <td><i><%= scientific_name %></i></td>
        <td><%= IUCN %> <br> <%= IUCN_bn %> </td>
        <td><%= IUCN_Bangladesh  %></td>
        <td>&nbsp;<%= CITES %> <br>&nbsp;<%= CITES_bn %></td>
        <td class="square">&nbsp;<%= schedule %> <br>&nbsp;<%= schedule_bn %></td>
    </tr>
</tbody>
</table>