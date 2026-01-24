<?php $__env->startSection('title', $siteSettings->tag_line); ?>

<?php $__env->startSection('content'); ?>
    <!--Hero-->
    <?php if($homePageSettings->enable_hero): ?>
        <?php if (isset($component)) { $__componentOriginalbd6d4d0fcd4660b0447ec3a000aa6bf28aea6570 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Hero::class, []); ?>
<?php $component->withName('hero'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalbd6d4d0fcd4660b0447ec3a000aa6bf28aea6570)): ?>
<?php $component = $__componentOriginalbd6d4d0fcd4660b0447ec3a000aa6bf28aea6570; ?>
<?php unset($__componentOriginalbd6d4d0fcd4660b0447ec3a000aa6bf28aea6570); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
    <?php endif; ?>

    <!--Results (Real Results from the R2S Community)-->
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.results','data' => []]); ?>
<?php $component->withName('results'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

    <!--Features-->
    <?php if($homePageSettings->enable_features): ?>
        <?php if (isset($component)) { $__componentOriginal9896791f17a81069298d61b559ac9f1149c1ecfc = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Features::class, []); ?>
<?php $component->withName('features'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginal9896791f17a81069298d61b559ac9f1149c1ecfc)): ?>
<?php $component = $__componentOriginal9896791f17a81069298d61b559ac9f1149c1ecfc; ?>
<?php unset($__componentOriginal9896791f17a81069298d61b559ac9f1149c1ecfc); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
    <?php endif; ?>

    <!--Partner CTA Section-->
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.partner','data' => []]); ?>
<?php $component->withName('partner'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

    <!--Categories-->


    <!--Stats-->

    <!--CTA-->
    <?php if($homePageSettings->enable_cta): ?>
        <?php if (isset($component)) { $__componentOriginald677f82e54e42f61b391c66e66511c5bb1c2da69 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Cta::class, []); ?>
<?php $component->withName('cta'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginald677f82e54e42f61b391c66e66511c5bb1c2da69)): ?>
<?php $component = $__componentOriginald677f82e54e42f61b391c66e66511c5bb1c2da69; ?>
<?php unset($__componentOriginald677f82e54e42f61b391c66e66511c5bb1c2da69); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('store.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\resources\views/store/index.blade.php ENDPATH**/ ?>