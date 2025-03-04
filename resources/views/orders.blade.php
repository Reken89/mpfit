<script src="https://code.jquery.com/jquery-3.6.3.js"></script> 
<div id="live_data"></div>

<script>
    $(document).ready(function(){
   
        //Подгружаем BACK шаблон отрисовки
        function fetch_data(){
            $.ajax({                
                url:"/mpfit/public/orders/table", 
                method:"GET",
                dataType:"text",
                success:function(data){  
                    $('#live_data').html(data); 
                }   
            });  
        } 
        fetch_data();
        
        //Изменение статуса заказа
        $(document).on('click', '#update', function(){
            var tr = this.closest('tr');
            var id = $('.id', tr).val();
                        
            $.ajax({
                url:"/mpfit/public/orders/update",  
                method:"patch",
                data:{
                    "_token": "{{ csrf_token() }}",
                    id
                },
                dataType:"text",  
                success:function(data){  
                    fetch_data();  
                } 
            }) 
        })
        
        //Добавление заказа
        $(document).on('click', '#add', function(){
            var tr = this.closest('tr');
            var name = $('.name', tr).val();
            var product = $('.product', tr).val();
            var comment = $('.comment', tr).val();
            var quantity = $('.quantity', tr).val();
                        
            $.ajax({
                url:"/mpfit/public/orders/add",  
                method:"post",
                data:{
                    "_token": "{{ csrf_token() }}",
                    name, product, comment, quantity
                },
                dataType:"text",  
                success:function(data){  
                    fetch_data();  
                } 
            }) 
        })
      
    });
</script>


