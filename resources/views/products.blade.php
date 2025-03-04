<script src="https://code.jquery.com/jquery-3.6.3.js"></script> 
<div id="live_data"></div>

<script>
    $(document).ready(function(){
   
        //Подгружаем BACK шаблон отрисовки
        function fetch_data(){
            $.ajax({                
                url:"/mpfit/public/products/table", 
                method:"GET",
                dataType:"text",
                success:function(data){  
                    $('#live_data').html(data); 
                }   
            });  
        } 
        fetch_data();
        
        //Добавляем товар в таблицу
        $(document).on('click', '#add', function(){
            var tr = this.closest('tr');
            var name = $('.name', tr).val();
            var description = $('.description', tr).val();
            var category = $('.category', tr).val();
            
            //Получаем значения, меняем запятую на точку и убираем пробелы в числе                   
            function structure(title){
                var volume = $(title, tr).val();
                //Меняем запятую на точку
                //Убираем лишние пробелы
                var volume = volume.replace(/\,/g,'.');
                var volume = volume.replace(/ /g,'');
                return volume;
            }
            
            var price = structure('.price');
                        
            $.ajax({
                url:"/mpfit/public/products/add",  
                method:"post",
                data:{
                    "_token": "{{ csrf_token() }}",
                    name, description, category, price
                },
                dataType:"text",  
                success:function(data){  
                    fetch_data();  
                } 
            }) 
        })
        
        //Удаление товара из таблицы
        $(document).on('click', '#delete', function(){
            var tr = this.closest('tr');
            var id = $('.id', tr).val();
                        
            $.ajax({
                url:"/mpfit/public/products/delete",  
                method:"delete",
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
      
    });
</script>

