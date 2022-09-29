<div class="event swiper-slide">
    <p class="event__hour"><?php echo $event->hour->hour; ?></p>

    <div class="event__info">
        <h4 class="event__name"><?php echo $event->name; ?></h4>

        <p class="event__introduction"><?php echo $event->description; ?></p>

        <div class="event__speaker-info">
            <picture>
                <source srcset="img/speakers/<?php echo $event->speaker->image; ?>.webp" type="image/webp">
                <source srcset="img/speakers/<?php echo $event->speaker->image; ?>.png" type="image/png">
                <img loading="lazy" class="event__speaker-image" src="img/speakers/<?php echo $event->speaker->image; ?>.png" width="200" height="300" alt="Speaker Image">
            </picture>

            <p class="event__speaker-name">
                <?php echo $event->speaker->name . " " . $event->speaker->last_name; ?>
            </p>
        </div>
    </div>
</div>