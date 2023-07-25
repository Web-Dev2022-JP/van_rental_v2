console.log($('.driver-id').val())

// get driver credentials
const driverCredentials = async()=>{
    const id = $('.driver-id').val()
    $.ajax({
        url: `/accounts/view/${id}`,
        method: "GET",
        dataType: "json",
        success:function(res){
            console.log(res)
        },
        error:function(err){
            console.log(err)
        }
    })
}
driverCredentials()