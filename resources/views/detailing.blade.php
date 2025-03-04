<script src="https://code.jquery.com/jquery-3.6.3.js"></script> 
<div id="live_data"></div>

<script>
    $(document).ready(function(){
   
        //Подгружаем BACK шаблон отрисовки
        function fetch_data(){
            var id = <?=json_encode($id)?>;
            $.ajax({                
                url:"/mpfit/public/detailing/table", 
                method:"GET",
                data:{
                    id
                },
                dataType:"text",
                success:function(data){  
                    $('#live_data').html(data); 
                }   
            });  
        } 
        fetch_data();
        
        //Обновляем информацию о товаре
        $(document).on('click', '#update', function(){
            var tr = this.closest('tr');
            var id = $('.id', tr).val();
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
                url:"/mpfit/public/products/update",  
                method:"patch",
                data:{
                    "_token": "{{ csrf_token() }}",
                    id, name, description, category, price
                },
                dataType:"text",  
                success:function(data){
                    fetch_data();  
                } 
            }) 
        })
             
    });
</script>


