<div>
    @foreach ($images as $key => $image)
        <div class="col-xs-6 col-md-3">
        <div class="thumbnail">
            {{ $image }}
            <a href="javascript:void(0)" style="padding-top:8px;" onclick="deleteImage('{{ $key }}')">
                <span class="text-danger"><strong><i class="fa fa-trash-o"></i></strong></span>
            </a>
            <span>{{ $image->human_readable_size }}</span>
        </div>
        </div>
    @endforeach


    <script>
        function deleteImage(key) {
            if (confirm('Are you sure?')) {
                Livewire.emit('removeImage', key);
            }
        }
    </script>
</div>

