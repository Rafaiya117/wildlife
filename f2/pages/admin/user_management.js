route['user_management'] = function (para) {

  var customerArray = [];

  console.log(para);

  
  listen('get_all_users',bindjsondata);
  

function bindjsondata(evet,customerArray) {

  console.log('data!!!! ',customerArray);

     var tableRow = '', btnEditId, btnDeleteId ;
      _.forEach(customerArray, function (item, index) {
          
           btnEditId = "btnedit" + item.id;
           btnDeleteId = "btndelete" + item.id;
           tableRow += "<tr Id='" + item.id + "'   data-id='" + item.id 
              + "'   data-name ='" + item.name + "' data-email='" + item.designation + "' data-organization='" + item.organization + "'data-status='"+item.status
              + "'>"
              + "<td class='td-data'>" + item.id + "</td>"
              + "<td class='td-data'>" + item.name + "</td>"
              + "<td class='td-data'>" + item.designation + "</td>"
              + "<td class='td-data'>" + item.organization + "</td>"
              + "<td class='td-data'>" +
              "<a id='" + btnEditId + "' href='#edit_user/"+ item.id +"' class='btn btn-info btn-xs btn-editcustomer' style='font-size:18px;'><i class='fa fa-pencil' aria-hidden='true'></i>&nbsp;Edit এডিট</a>&nbsp;" 
              +  (item.status)+"</td>"
              + "</tr>";
          
      })

      $('#tblbody').html(tableRow);
       
  }

  fire('user_get_all');



 
};
