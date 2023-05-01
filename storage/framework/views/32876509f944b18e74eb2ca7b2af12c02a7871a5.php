

<?php $__env->startSection('content'); ?>

            <div class="map_container clearfix">

                <div class="column x3">

                    <div class="column x5">

                        <ul class="list">
                            <li class="header visited">Visited</li>
                            <?php $__currentLoopData = $visited; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $place): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($place->name); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>

                    <div class="column x5">

                        <ul class="list">
                            <li class="header togo">To Go</li>
                            <?php $__currentLoopData = $togo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $newplace): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($newplace->name); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>

                <div class="column x7">
                    <div id="map" class="map"></div>
                </div>

                <div class="clearfix"></div>
            </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
    <div class="footer">
        <p>
            <a href="https://github.com/do-community/travellist-laravel-demo/tree/tutorial-04" target="_blank" title="Source Code on Github">Travellist Laravel Demo</a>
        </p>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script type="text/javascript">
        var map;
        var mapLat = 0;
        var mapLng = 0;
        var mapDefaultZoom = 2;

        map = new ol.Map({
            target: "map",
            layers: [
                new ol.layer.Tile({
                    source: new ol.source.OSM({
                        url: "https://a.tile.openstreetmap.org/{z}/{x}/{y}.png"
                    })
                })
            ],
            view: new ol.View({
                center: ol.proj.fromLonLat([mapLng, mapLat]),
                zoom: mapDefaultZoom
            })
        });


        <?php $__currentLoopData = $togo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $place): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
            $place->lat = isset($place->lat) ? $place->lat : 0;
            $place->lng = isset($place->lng) ? $place->lng : 0;
        ?>
        add_map_point(<?php echo e($place->lat); ?>, <?php echo e($place->lng); ?>, "/img/marker_togo.png");
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php $__currentLoopData = $visited; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $place): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
            $place->lat = isset($place->lat) ? $place->lat : 0;
            $place->lng = isset($place->lng) ? $place->lng : 0;
        ?>
        add_map_point(<?php echo e($place->lat); ?>, <?php echo e($place->lng); ?>, "/img/marker_visited.png");
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/travel_list.blade.php ENDPATH**/ ?>