<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('posts')->delete();
        
        \DB::table('posts')->insert(array (
            0 => 
            array (
                'id' => 11,
                'user_id' => 11,
                'thumb_id' => 11,
                'description' => '',
                'filter_data' => '{"ObjectScale":0,"OffsetY":0,"OffsetX":0,"ParallaxScale":0,"ParallaxReferencePlane":0,"ParallaxIterations":0,"Alpha":0,"RyzStrength":0,"RyzIntensity":0,"RyzScanline":false,"RyzTint":0,"RyzVignette":0,"ryzScanLineSize":0,"RyzScanLinePower":0,"RetroStrength":0,"RetroGrainIntensity":0,"RetroGrainSize":0,"RetroSepiaTone":0,"RetroVignette":0,"GlamStrength":0,"GlamBrightness":0,"GlamContrast":0,"GlamSaturation":0,"GlamTint":0,"GlamBloom":0,"GrayStrength":0,"GrayBrightness":0,"GrayContrast":0,"GrayBloom":0,"FireStrength":0,"FireParticleSize":0,"FireParticleAmount":0,"FireParticleSpeed":0,"FireParticleTint":0,"FilterSwitch":0,"Scanline":0,"ResetCheck":0,"IceCheck":0,"GlamCheck":0,"OriginalCheck":0,"GrayCheck":0,"SepiaCheck":0,"FireCheck":0,"FireAlphaCheck":0,"AutoAlphaVirtual":0,"AutoAlpha":0,"TransformX":0,"TransformY":0,"TransformZ":0,"FireRenderer":0,"VignetteRenderer":0,"BackRenderer":0,"VignetteAlphaValue":0,"OriginalImageWidth":512,"OriginalImageHeight":288,"UserGeneratedTextures":0,"BackgroundColor":0,"BackgroundAlpha":0,"minMiddleLayerValue":60,"maxMiddleLayerValue":200}',
                'is_profile' => 1,
                'created_at' => '2022-01-26 23:32:49',
                'updated_at' => '2022-01-26 23:32:49',
            ),
            1 => 
            array (
                'id' => 16,
                'user_id' => 14,
                'thumb_id' => 16,
                'description' => '',
                'filter_data' => '{"ObjectScale":0,"OffsetY":0,"OffsetX":0,"ParallaxScale":0,"ParallaxReferencePlane":0,"ParallaxIterations":0,"Alpha":0,"RyzStrength":0,"RyzIntensity":0,"RyzScanline":false,"RyzTint":0,"RyzVignette":0,"ryzScanLineSize":0,"RyzScanLinePower":0,"RetroStrength":0,"RetroGrainIntensity":0,"RetroGrainSize":0,"RetroSepiaTone":0,"RetroVignette":0,"GlamStrength":0,"GlamBrightness":0,"GlamContrast":0,"GlamSaturation":0,"GlamTint":0,"GlamBloom":0,"GrayStrength":0,"GrayBrightness":0,"GrayContrast":0,"GrayBloom":0,"FireStrength":0,"FireParticleSize":0,"FireParticleAmount":0,"FireParticleSpeed":0,"FireParticleTint":0,"FilterSwitch":0,"Scanline":0,"ResetCheck":0,"IceCheck":0,"GlamCheck":0,"OriginalCheck":0,"GrayCheck":0,"SepiaCheck":0,"FireCheck":0,"FireAlphaCheck":0,"AutoAlphaVirtual":0,"AutoAlpha":0,"TransformX":0,"TransformY":0,"TransformZ":0,"FireRenderer":0,"VignetteRenderer":0,"BackRenderer":0,"VignetteAlphaValue":0,"OriginalImageWidth":512,"OriginalImageHeight":512,"UserGeneratedTextures":0,"BackgroundColor":0,"BackgroundAlpha":0,"minMiddleLayerValue":60,"maxMiddleLayerValue":200}',
                'is_profile' => 1,
                'created_at' => '2022-01-31 16:38:30',
                'updated_at' => '2022-01-31 16:38:30',
            ),
            2 => 
            array (
                'id' => 18,
                'user_id' => 15,
                'thumb_id' => 18,
                'description' => '',
                'filter_data' => '{"ObjectScale":0,"OffsetY":0,"OffsetX":0,"ParallaxScale":0,"ParallaxReferencePlane":0,"ParallaxIterations":0,"Alpha":0,"RyzStrength":0,"RyzIntensity":0,"RyzScanline":false,"RyzTint":0,"RyzVignette":0,"ryzScanLineSize":0,"RyzScanLinePower":0,"RetroStrength":0,"RetroGrainIntensity":0,"RetroGrainSize":0,"RetroSepiaTone":0,"RetroVignette":0,"GlamStrength":0,"GlamBrightness":0,"GlamContrast":0,"GlamSaturation":0,"GlamTint":0,"GlamBloom":0,"GrayStrength":0,"GrayBrightness":0,"GrayContrast":0,"GrayBloom":0,"FireStrength":0,"FireParticleSize":0,"FireParticleAmount":0,"FireParticleSpeed":0,"FireParticleTint":0,"FilterSwitch":0,"Scanline":0,"ResetCheck":0,"IceCheck":0,"GlamCheck":0,"OriginalCheck":0,"GrayCheck":0,"SepiaCheck":0,"FireCheck":0,"FireAlphaCheck":0,"AutoAlphaVirtual":0,"AutoAlpha":0,"TransformX":0,"TransformY":0,"TransformZ":0,"FireRenderer":0,"VignetteRenderer":0,"BackRenderer":0,"VignetteAlphaValue":0,"OriginalImageWidth":512,"OriginalImageHeight":512,"UserGeneratedTextures":1,"BackgroundColor":0,"BackgroundAlpha":0,"minMiddleLayerValue":60,"maxMiddleLayerValue":200}',
                'is_profile' => 1,
                'created_at' => '2022-01-31 18:23:50',
                'updated_at' => '2022-01-31 18:23:50',
            ),
            3 => 
            array (
                'id' => 23,
                'user_id' => 17,
                'thumb_id' => 23,
                'description' => '',
                'filter_data' => '{"ObjectScale":1,"OffsetY":0,"OffsetX":0,"ParallaxScale":0.0010000000474974513,"ParallaxReferencePlane":0.8999999761581421,"ParallaxIterations":4,"Alpha":0,"RyzStrength":0,"RyzIntensity":0,"RyzScanline":false,"RyzTint":0,"RyzVignette":0,"ryzScanLineSize":0,"RyzScanLinePower":0,"RetroStrength":0,"RetroGrainIntensity":0,"RetroGrainSize":0,"RetroSepiaTone":0,"RetroVignette":0,"GlamStrength":0,"GlamBrightness":0,"GlamContrast":0,"GlamSaturation":0,"GlamTint":0,"GlamBloom":0,"GrayStrength":0.8975028991699219,"GrayBrightness":1,"GrayContrast":1.5,"GrayBloom":0.5,"FireStrength":0,"FireParticleSize":0,"FireParticleAmount":0,"FireParticleSpeed":0,"FireParticleTint":0,"FilterSwitch":0,"Scanline":0,"ResetCheck":0,"IceCheck":0,"GlamCheck":0,"OriginalCheck":0,"GrayCheck":1,"SepiaCheck":0,"FireCheck":0,"FireAlphaCheck":0,"AutoAlphaVirtual":0,"AutoAlpha":0,"TransformX":0,"TransformY":0,"TransformZ":0,"FireRenderer":0,"VignetteRenderer":0,"BackRenderer":0,"VignetteAlphaValue":0,"OriginalImageWidth":512,"OriginalImageHeight":512,"UserGeneratedTextures":0,"BackgroundColor":0,"BackgroundAlpha":0,"minMiddleLayerValue":60,"maxMiddleLayerValue":200}',
                'is_profile' => 1,
                'created_at' => '2022-01-31 23:47:33',
                'updated_at' => '2022-01-31 23:47:33',
            ),
            4 => 
            array (
                'id' => 27,
                'user_id' => 16,
                'thumb_id' => 27,
                'description' => '',
                'filter_data' => '{"ObjectScale":1,"OffsetY":0,"OffsetX":0,"ParallaxScale":0.0010000000474974513,"ParallaxReferencePlane":0.8999999761581421,"ParallaxIterations":4,"Alpha":0,"RyzStrength":0,"RyzIntensity":0,"RyzScanline":false,"RyzTint":0,"RyzVignette":0,"ryzScanLineSize":0,"RyzScanLinePower":0,"RetroStrength":0,"RetroGrainIntensity":0,"RetroGrainSize":0,"RetroSepiaTone":0,"RetroVignette":0,"GlamStrength":0,"GlamBrightness":0,"GlamContrast":0,"GlamSaturation":0,"GlamTint":0,"GlamBloom":0,"GrayStrength":0,"GrayBrightness":0,"GrayContrast":0,"GrayBloom":0,"FireStrength":0,"FireParticleSize":0,"FireParticleAmount":0,"FireParticleSpeed":0,"FireParticleTint":0,"FilterSwitch":0,"Scanline":0,"ResetCheck":0,"IceCheck":0,"GlamCheck":0,"OriginalCheck":1,"GrayCheck":0,"SepiaCheck":0,"FireCheck":0,"FireAlphaCheck":0,"AutoAlphaVirtual":0,"AutoAlpha":0,"TransformX":0,"TransformY":0,"TransformZ":0,"FireRenderer":0,"VignetteRenderer":0,"BackRenderer":0,"VignetteAlphaValue":0,"OriginalImageWidth":512,"OriginalImageHeight":512,"UserGeneratedTextures":0,"BackgroundColor":0,"BackgroundAlpha":0,"minMiddleLayerValue":60,"maxMiddleLayerValue":200}',
                'is_profile' => 1,
                'created_at' => '2022-02-01 02:00:48',
                'updated_at' => '2022-02-01 02:00:48',
            ),
            5 => 
            array (
                'id' => 34,
                'user_id' => 22,
                'thumb_id' => 34,
                'description' => '',
                'filter_data' => '{"ObjectScale":1,"OffsetY":0,"OffsetX":0,"ParallaxScale":0.0010000000474974513,"ParallaxReferencePlane":0.8999999761581421,"ParallaxIterations":4,"Alpha":0,"RyzStrength":0.5,"RyzIntensity":250,"RyzScanline":false,"RyzTint":0,"RyzVignette":0.5,"ryzScanLineSize":0,"RyzScanLinePower":0.5,"RetroStrength":0.4720778167247772,"RetroGrainIntensity":0.5,"RetroGrainSize":-250,"RetroSepiaTone":0,"RetroVignette":0,"GlamStrength":0.4776974320411682,"GlamBrightness":1,"GlamContrast":1,"GlamSaturation":0.5,"GlamTint":0,"GlamBloom":0,"GrayStrength":0,"GrayBrightness":0,"GrayContrast":0,"GrayBloom":0,"FireStrength":0,"FireParticleSize":0,"FireParticleAmount":0,"FireParticleSpeed":0,"FireParticleTint":0,"FilterSwitch":0,"Scanline":0,"ResetCheck":0,"IceCheck":0,"GlamCheck":0,"OriginalCheck":1,"GrayCheck":0,"SepiaCheck":0,"FireCheck":0,"FireAlphaCheck":0,"AutoAlphaVirtual":0,"AutoAlpha":0,"TransformX":0,"TransformY":0,"TransformZ":0,"FireRenderer":0,"VignetteRenderer":0,"BackRenderer":0,"VignetteAlphaValue":0.5,"OriginalImageWidth":512,"OriginalImageHeight":512,"UserGeneratedTextures":0,"BackgroundColor":0,"BackgroundAlpha":0,"minMiddleLayerValue":60,"maxMiddleLayerValue":200}',
                'is_profile' => 1,
                'created_at' => '2022-02-02 19:45:26',
                'updated_at' => '2022-02-02 19:45:26',
            ),
            6 => 
            array (
                'id' => 37,
                'user_id' => 25,
                'thumb_id' => 37,
                'description' => '',
                'filter_data' => '{"ObjectScale":0,"OffsetY":0,"OffsetX":0,"ParallaxScale":0,"ParallaxReferencePlane":0,"ParallaxIterations":0,"Alpha":0,"RyzStrength":0,"RyzIntensity":0,"RyzScanline":false,"RyzTint":0,"RyzVignette":0,"ryzScanLineSize":0,"RyzScanLinePower":0,"RetroStrength":0,"RetroGrainIntensity":0,"RetroGrainSize":0,"RetroSepiaTone":0,"RetroVignette":0,"GlamStrength":0,"GlamBrightness":0,"GlamContrast":0,"GlamSaturation":0,"GlamTint":0,"GlamBloom":0,"GrayStrength":0,"GrayBrightness":0,"GrayContrast":0,"GrayBloom":0,"FireStrength":0,"FireParticleSize":0,"FireParticleAmount":0,"FireParticleSpeed":0,"FireParticleTint":0,"FilterSwitch":0,"Scanline":0,"ResetCheck":0,"IceCheck":0,"GlamCheck":0,"OriginalCheck":0,"GrayCheck":0,"SepiaCheck":0,"FireCheck":0,"FireAlphaCheck":0,"AutoAlphaVirtual":0,"AutoAlpha":0,"TransformX":0,"TransformY":0,"TransformZ":0,"FireRenderer":0,"VignetteRenderer":0,"BackRenderer":0,"VignetteAlphaValue":0,"OriginalImageWidth":512,"OriginalImageHeight":512,"UserGeneratedTextures":0,"BackgroundColor":0,"BackgroundAlpha":0,"minMiddleLayerValue":60,"maxMiddleLayerValue":200}',
                'is_profile' => 1,
                'created_at' => '2022-02-03 05:21:53',
                'updated_at' => '2022-02-03 05:21:53',
            ),
            7 => 
            array (
                'id' => 41,
                'user_id' => 40,
                'thumb_id' => 41,
                'description' => '',
                'filter_data' => '{"ObjectScale":0,"OffsetY":0,"OffsetX":0,"ParallaxScale":0,"ParallaxReferencePlane":0,"ParallaxIterations":0,"Alpha":0,"RyzStrength":0,"RyzIntensity":0,"RyzScanline":false,"RyzTint":0,"RyzVignette":0,"ryzScanLineSize":0,"RyzScanLinePower":0,"RetroStrength":0,"RetroGrainIntensity":0,"RetroGrainSize":0,"RetroSepiaTone":0,"RetroVignette":0,"GlamStrength":0,"GlamBrightness":0,"GlamContrast":0,"GlamSaturation":0,"GlamTint":0,"GlamBloom":0,"GrayStrength":0,"GrayBrightness":0,"GrayContrast":0,"GrayBloom":0,"FireStrength":0,"FireParticleSize":0,"FireParticleAmount":0,"FireParticleSpeed":0,"FireParticleTint":0,"FilterSwitch":0,"Scanline":0,"ResetCheck":0,"IceCheck":0,"GlamCheck":0,"OriginalCheck":0,"GrayCheck":0,"SepiaCheck":0,"FireCheck":0,"FireAlphaCheck":0,"AutoAlphaVirtual":0,"AutoAlpha":0,"TransformX":0,"TransformY":0,"TransformZ":0,"FireRenderer":0,"VignetteRenderer":0,"BackRenderer":0,"VignetteAlphaValue":0,"OriginalImageWidth":512,"OriginalImageHeight":512,"UserGeneratedTextures":0,"BackgroundColor":0,"BackgroundAlpha":0,"minMiddleLayerValue":60,"maxMiddleLayerValue":200}',
                'is_profile' => 1,
                'created_at' => '2022-02-03 20:18:59',
                'updated_at' => '2022-02-03 20:18:59',
            ),
            8 => 
            array (
                'id' => 67,
                'user_id' => 47,
                'thumb_id' => 67,
                'description' => '',
                'filter_data' => '{"ObjectScale":1,"OffsetY":0,"OffsetX":0,"ParallaxScale":0.0010000000474974513,"ParallaxReferencePlane":0.8999999761581421,"ParallaxIterations":4,"Alpha":0,"RyzStrength":0,"RyzIntensity":0,"RyzScanline":false,"RyzTint":0,"RyzVignette":0,"ryzScanLineSize":0,"RyzScanLinePower":0,"RetroStrength":0,"RetroGrainIntensity":0,"RetroGrainSize":0,"RetroSepiaTone":0,"RetroVignette":0,"GlamStrength":0,"GlamBrightness":0,"GlamContrast":0,"GlamSaturation":0,"GlamTint":0,"GlamBloom":0,"GrayStrength":0,"GrayBrightness":0,"GrayContrast":0,"GrayBloom":0,"FireStrength":0,"FireParticleSize":0,"FireParticleAmount":0,"FireParticleSpeed":0,"FireParticleTint":0,"FilterSwitch":0,"Scanline":0,"ResetCheck":0,"IceCheck":0,"GlamCheck":0,"OriginalCheck":1,"GrayCheck":0,"SepiaCheck":0,"FireCheck":0,"FireAlphaCheck":0,"AutoAlphaVirtual":0,"AutoAlpha":0,"TransformX":0,"TransformY":0,"TransformZ":0,"FireRenderer":0,"VignetteRenderer":0,"BackRenderer":0,"VignetteAlphaValue":0,"OriginalImageWidth":512,"OriginalImageHeight":512,"UserGeneratedTextures":0,"BackgroundColor":0,"BackgroundAlpha":0,"minMiddleLayerValue":60,"maxMiddleLayerValue":200}',
                'is_profile' => 1,
                'created_at' => '2022-02-25 23:44:06',
                'updated_at' => '2022-02-25 23:44:06',
            ),
            9 => 
            array (
                'id' => 74,
                'user_id' => 60,
                'thumb_id' => 74,
                'description' => '',
                'filter_data' => '{"ObjectScale":0,"OffsetY":0,"OffsetX":0,"ParallaxScale":0,"ParallaxReferencePlane":0,"ParallaxIterations":0,"Alpha":0,"RyzStrength":0,"RyzIntensity":0,"RyzScanline":false,"RyzTint":0,"RyzVignette":0,"ryzScanLineSize":0,"RyzScanLinePower":0,"RetroStrength":0,"RetroGrainIntensity":0,"RetroGrainSize":0,"RetroSepiaTone":0,"RetroVignette":0,"GlamStrength":0,"GlamBrightness":0,"GlamContrast":0,"GlamSaturation":0,"GlamTint":0,"GlamBloom":0,"GrayStrength":0,"GrayBrightness":0,"GrayContrast":0,"GrayBloom":0,"FireStrength":0,"FireParticleSize":0,"FireParticleAmount":0,"FireParticleSpeed":0,"FireParticleTint":0,"FilterSwitch":0,"Scanline":0,"ResetCheck":0,"IceCheck":0,"GlamCheck":0,"OriginalCheck":0,"GrayCheck":0,"SepiaCheck":0,"FireCheck":0,"FireAlphaCheck":0,"AutoAlphaVirtual":0,"AutoAlpha":0,"TransformX":0,"TransformY":0,"TransformZ":0,"FireRenderer":0,"VignetteRenderer":0,"BackRenderer":0,"VignetteAlphaValue":0,"OriginalImageWidth":512,"OriginalImageHeight":512,"UserGeneratedTextures":1,"BackgroundColor":0,"BackgroundAlpha":0,"minMiddleLayerValue":60,"maxMiddleLayerValue":200}',
                'is_profile' => 1,
                'created_at' => '2022-03-14 18:58:43',
                'updated_at' => '2022-03-14 18:58:43',
            ),
            10 => 
            array (
                'id' => 80,
                'user_id' => 4,
                'thumb_id' => 80,
                'description' => '',
                'filter_data' => '{"ObjectScale":0,"OffsetY":0,"OffsetX":0,"ParallaxScale":0,"ParallaxReferencePlane":0,"ParallaxIterations":0,"Alpha":0,"RyzStrength":0,"RyzIntensity":0,"RyzScanline":false,"RyzTint":0,"RyzVignette":0,"ryzScanLineSize":0,"RyzScanLinePower":0,"RetroStrength":0,"RetroGrainIntensity":0,"RetroGrainSize":0,"RetroSepiaTone":0,"RetroVignette":0,"GlamStrength":0,"GlamBrightness":0,"GlamContrast":0,"GlamSaturation":0,"GlamTint":0,"GlamBloom":0,"GrayStrength":0,"GrayBrightness":0,"GrayContrast":0,"GrayBloom":0,"FireStrength":0,"FireParticleSize":0,"FireParticleAmount":0,"FireParticleSpeed":0,"FireParticleTint":0,"FilterSwitch":0,"Scanline":0,"ResetCheck":0,"IceCheck":0,"GlamCheck":0,"OriginalCheck":0,"GrayCheck":0,"SepiaCheck":0,"FireCheck":0,"FireAlphaCheck":0,"AutoAlphaVirtual":0,"AutoAlpha":0,"TransformX":0,"TransformY":0,"TransformZ":0,"FireRenderer":0,"VignetteRenderer":0,"BackRenderer":0,"VignetteAlphaValue":0,"OriginalImageWidth":512,"OriginalImageHeight":512,"UserGeneratedTextures":0,"BackgroundColor":0,"BackgroundAlpha":0,"minMiddleLayerValue":60,"maxMiddleLayerValue":200}',
                'is_profile' => 1,
                'created_at' => '2022-03-17 19:19:15',
                'updated_at' => '2022-03-17 19:19:15',
            ),
            11 => 
            array (
                'id' => 97,
                'user_id' => 4,
                'thumb_id' => 97,
                'description' => '',
                'filter_data' => '{"ObjectScale":1,"OffsetY":0,"OffsetX":0,"ParallaxScale":0.0010000000474974513,"ParallaxReferencePlane":0.8999999761581421,"ParallaxIterations":4,"Alpha":0,"RyzStrength":0.5275052785873413,"RyzIntensity":209.1112060546875,"RyzScanline":false,"RyzTint":0.7778786420822144,"RyzVignette":0.5,"ryzScanLineSize":0,"RyzScanLinePower":0.6985517740249634,"RetroStrength":0,"RetroGrainIntensity":0,"RetroGrainSize":0,"RetroSepiaTone":0,"RetroVignette":0,"GlamStrength":0,"GlamBrightness":0,"GlamContrast":0,"GlamSaturation":0,"GlamTint":0,"GlamBloom":0,"GrayStrength":0,"GrayBrightness":0,"GrayContrast":0,"GrayBloom":0,"FireStrength":0,"FireParticleSize":0,"FireParticleAmount":0,"FireParticleSpeed":0,"FireParticleTint":0,"FilterSwitch":0,"Scanline":1,"ResetCheck":0,"IceCheck":1,"GlamCheck":0,"OriginalCheck":0,"GrayCheck":0,"SepiaCheck":0,"FireCheck":0,"FireAlphaCheck":0,"AutoAlphaVirtual":0,"AutoAlpha":0,"TransformX":0,"TransformY":0,"TransformZ":0,"FireRenderer":0,"VignetteRenderer":1,"BackRenderer":0,"VignetteAlphaValue":0.5,"OriginalImageWidth":512,"OriginalImageHeight":323,"UserGeneratedTextures":1,"BackgroundColor":0,"BackgroundAlpha":0,"minMiddleLayerValue":60,"maxMiddleLayerValue":200}',
                'is_profile' => 0,
                'created_at' => '2022-04-04 19:16:13',
                'updated_at' => '2022-04-04 19:16:13',
            ),
            12 => 
            array (
                'id' => 103,
                'user_id' => 4,
                'thumb_id' => 103,
                'description' => '',
                'filter_data' => '{"ObjectScale":1,"OffsetY":0,"OffsetX":0,"ParallaxScale":0.0010000000474974513,"ParallaxReferencePlane":0.8999999761581421,"ParallaxIterations":4,"Alpha":0,"RyzStrength":0,"RyzIntensity":0,"RyzScanline":false,"RyzTint":0,"RyzVignette":0.5,"ryzScanLineSize":0,"RyzScanLinePower":0,"RetroStrength":0.5,"RetroGrainIntensity":0.5,"RetroGrainSize":-250,"RetroSepiaTone":0,"RetroVignette":0,"GlamStrength":0,"GlamBrightness":1,"GlamContrast":0.6827993988990784,"GlamSaturation":0.7663581967353821,"GlamTint":0,"GlamBloom":0,"GrayStrength":0,"GrayBrightness":0,"GrayContrast":0,"GrayBloom":0,"FireStrength":0,"FireParticleSize":0,"FireParticleAmount":0,"FireParticleSpeed":0,"FireParticleTint":0,"FilterSwitch":0,"Scanline":0,"ResetCheck":0,"IceCheck":0,"GlamCheck":0,"OriginalCheck":1,"GrayCheck":0,"SepiaCheck":0,"FireCheck":0,"FireAlphaCheck":0,"AutoAlphaVirtual":0,"AutoAlpha":0,"TransformX":0,"TransformY":0,"TransformZ":0,"FireRenderer":0,"VignetteRenderer":0,"BackRenderer":0,"VignetteAlphaValue":0.5,"OriginalImageWidth":512,"OriginalImageHeight":342,"UserGeneratedTextures":1,"BackgroundColor":0,"BackgroundAlpha":0,"minMiddleLayerValue":60,"maxMiddleLayerValue":200}',
                'is_profile' => 0,
                'created_at' => '2022-04-04 20:13:02',
                'updated_at' => '2022-04-04 20:13:02',
            ),
            13 => 
            array (
                'id' => 104,
                'user_id' => 4,
                'thumb_id' => 104,
                'description' => '',
                'filter_data' => '{"ObjectScale":1,"OffsetY":0,"OffsetX":0,"ParallaxScale":0.0010000000474974513,"ParallaxReferencePlane":0.8999999761581421,"ParallaxIterations":4,"Alpha":0,"RyzStrength":0,"RyzIntensity":0,"RyzScanline":false,"RyzTint":0,"RyzVignette":0,"ryzScanLineSize":0,"RyzScanLinePower":0,"RetroStrength":0,"RetroGrainIntensity":0,"RetroGrainSize":0,"RetroSepiaTone":0,"RetroVignette":0,"GlamStrength":0,"GlamBrightness":0,"GlamContrast":0,"GlamSaturation":0,"GlamTint":0,"GlamBloom":0,"GrayStrength":0,"GrayBrightness":0,"GrayContrast":0,"GrayBloom":0,"FireStrength":0,"FireParticleSize":0,"FireParticleAmount":0,"FireParticleSpeed":0,"FireParticleTint":0,"FilterSwitch":0,"Scanline":0,"ResetCheck":0,"IceCheck":0,"GlamCheck":0,"OriginalCheck":1,"GrayCheck":0,"SepiaCheck":0,"FireCheck":0,"FireAlphaCheck":0,"AutoAlphaVirtual":0,"AutoAlpha":0,"TransformX":0,"TransformY":0,"TransformZ":0,"FireRenderer":0,"VignetteRenderer":0,"BackRenderer":0,"VignetteAlphaValue":0,"OriginalImageWidth":512,"OriginalImageHeight":342,"UserGeneratedTextures":1,"BackgroundColor":0,"BackgroundAlpha":0,"minMiddleLayerValue":60,"maxMiddleLayerValue":200}',
                'is_profile' => 0,
                'created_at' => '2022-04-04 20:16:28',
                'updated_at' => '2022-04-04 20:16:28',
            ),
            14 => 
            array (
                'id' => 106,
                'user_id' => 4,
                'thumb_id' => 106,
                'description' => '',
                'filter_data' => '{"ObjectScale":1,"OffsetY":0,"OffsetX":0,"ParallaxScale":0.0010000000474974513,"ParallaxReferencePlane":0.8999999761581421,"ParallaxIterations":4,"Alpha":0,"RyzStrength":0.5,"RyzIntensity":250,"RyzScanline":false,"RyzTint":0,"RyzVignette":0.5,"ryzScanLineSize":0,"RyzScanLinePower":0.5,"RetroStrength":0,"RetroGrainIntensity":0,"RetroGrainSize":0,"RetroSepiaTone":0,"RetroVignette":0,"GlamStrength":0.3176475167274475,"GlamBrightness":1.270512580871582,"GlamContrast":1.4845194816589355,"GlamSaturation":0.3645515739917755,"GlamTint":0,"GlamBloom":0,"GrayStrength":0,"GrayBrightness":0,"GrayContrast":0,"GrayBloom":0,"FireStrength":0,"FireParticleSize":0,"FireParticleAmount":0,"FireParticleSpeed":0,"FireParticleTint":0,"FilterSwitch":0,"Scanline":0,"ResetCheck":0,"IceCheck":0,"GlamCheck":1,"OriginalCheck":0,"GrayCheck":0,"SepiaCheck":0,"FireCheck":0,"FireAlphaCheck":0,"AutoAlphaVirtual":0,"AutoAlpha":0,"TransformX":0,"TransformY":0,"TransformZ":0,"FireRenderer":0,"VignetteRenderer":1,"BackRenderer":0,"VignetteAlphaValue":0.5,"OriginalImageWidth":512,"OriginalImageHeight":342,"UserGeneratedTextures":1,"BackgroundColor":0,"BackgroundAlpha":0,"minMiddleLayerValue":60,"maxMiddleLayerValue":200}',
                'is_profile' => 0,
                'created_at' => '2022-04-04 20:30:12',
                'updated_at' => '2022-04-04 20:30:12',
            ),
            15 => 
            array (
                'id' => 109,
                'user_id' => 4,
                'thumb_id' => 109,
                'description' => '',
                'filter_data' => '{"ObjectScale":1,"OffsetY":0,"OffsetX":0,"ParallaxScale":0.0010000000474974513,"ParallaxReferencePlane":0.8999999761581421,"ParallaxIterations":4,"Alpha":0,"RyzStrength":0.3065223693847656,"RyzIntensity":22.130229949951172,"RyzScanline":false,"RyzTint":0.26896578073501587,"RyzVignette":0,"ryzScanLineSize":0,"RyzScanLinePower":0.775795042514801,"RetroStrength":0,"RetroGrainIntensity":0,"RetroGrainSize":0,"RetroSepiaTone":0,"RetroVignette":0,"GlamStrength":0,"GlamBrightness":0,"GlamContrast":0,"GlamSaturation":0,"GlamTint":0,"GlamBloom":0,"GrayStrength":0,"GrayBrightness":0,"GrayContrast":0,"GrayBloom":0,"FireStrength":0,"FireParticleSize":0,"FireParticleAmount":0,"FireParticleSpeed":0,"FireParticleTint":0,"FilterSwitch":0,"Scanline":1,"ResetCheck":0,"IceCheck":1,"GlamCheck":0,"OriginalCheck":0,"GrayCheck":0,"SepiaCheck":0,"FireCheck":0,"FireAlphaCheck":0,"AutoAlphaVirtual":0,"AutoAlpha":0,"TransformX":0,"TransformY":0,"TransformZ":0,"FireRenderer":0,"VignetteRenderer":0,"BackRenderer":0,"VignetteAlphaValue":0,"OriginalImageWidth":512,"OriginalImageHeight":341,"UserGeneratedTextures":1,"BackgroundColor":0,"BackgroundAlpha":0,"minMiddleLayerValue":60,"maxMiddleLayerValue":200}',
                'is_profile' => 0,
                'created_at' => '2022-04-04 20:41:07',
                'updated_at' => '2022-04-04 20:41:07',
            ),
            16 => 
            array (
                'id' => 111,
                'user_id' => 4,
                'thumb_id' => 111,
                'description' => '',
                'filter_data' => '{"ObjectScale":1,"OffsetY":0,"OffsetX":0,"ParallaxScale":0.0010000000474974513,"ParallaxReferencePlane":0.8999999761581421,"ParallaxIterations":4,"Alpha":0,"RyzStrength":0,"RyzIntensity":0,"RyzScanline":false,"RyzTint":0,"RyzVignette":0.5,"ryzScanLineSize":0,"RyzScanLinePower":0,"RetroStrength":0,"RetroGrainIntensity":0,"RetroGrainSize":0,"RetroSepiaTone":0,"RetroVignette":0,"GlamStrength":0.482117235660553,"GlamBrightness":1.0507893562316895,"GlamContrast":1.9181606769561768,"GlamSaturation":0.15183350443840027,"GlamTint":0,"GlamBloom":0,"GrayStrength":0,"GrayBrightness":0,"GrayContrast":0,"GrayBloom":0,"FireStrength":0,"FireParticleSize":0,"FireParticleAmount":0,"FireParticleSpeed":0,"FireParticleTint":0,"FilterSwitch":0,"Scanline":0,"ResetCheck":0,"IceCheck":0,"GlamCheck":1,"OriginalCheck":0,"GrayCheck":0,"SepiaCheck":0,"FireCheck":0,"FireAlphaCheck":0,"AutoAlphaVirtual":0,"AutoAlpha":0,"TransformX":0,"TransformY":0,"TransformZ":0,"FireRenderer":0,"VignetteRenderer":1,"BackRenderer":0,"VignetteAlphaValue":0,"OriginalImageWidth":512,"OriginalImageHeight":342,"UserGeneratedTextures":1,"BackgroundColor":0,"BackgroundAlpha":0,"minMiddleLayerValue":60,"maxMiddleLayerValue":200}',
                'is_profile' => 0,
                'created_at' => '2022-04-04 21:47:01',
                'updated_at' => '2022-04-04 21:47:01',
            ),
            17 => 
            array (
                'id' => 112,
                'user_id' => 4,
                'thumb_id' => 112,
                'description' => '',
                'filter_data' => '{"ObjectScale":1,"OffsetY":0,"OffsetX":0,"ParallaxScale":0.0010000000474974513,"ParallaxReferencePlane":0.8999999761581421,"ParallaxIterations":4,"Alpha":0,"RyzStrength":0,"RyzIntensity":0,"RyzScanline":false,"RyzTint":0,"RyzVignette":0.5,"ryzScanLineSize":0,"RyzScanLinePower":0,"RetroStrength":0.5,"RetroGrainIntensity":0.5,"RetroGrainSize":-250,"RetroSepiaTone":0,"RetroVignette":0,"GlamStrength":0,"GlamBrightness":0,"GlamContrast":0,"GlamSaturation":0,"GlamTint":0,"GlamBloom":0,"GrayStrength":0,"GrayBrightness":0,"GrayContrast":0,"GrayBloom":0,"FireStrength":0,"FireParticleSize":0,"FireParticleAmount":0,"FireParticleSpeed":0,"FireParticleTint":0,"FilterSwitch":0,"Scanline":0,"ResetCheck":0,"IceCheck":0,"GlamCheck":0,"OriginalCheck":0,"GrayCheck":0,"SepiaCheck":1,"FireCheck":0,"FireAlphaCheck":0,"AutoAlphaVirtual":0,"AutoAlpha":0,"TransformX":0,"TransformY":0,"TransformZ":0,"FireRenderer":0,"VignetteRenderer":1,"BackRenderer":0,"VignetteAlphaValue":0.5,"OriginalImageWidth":512,"OriginalImageHeight":402,"UserGeneratedTextures":1,"BackgroundColor":0,"BackgroundAlpha":0,"minMiddleLayerValue":60,"maxMiddleLayerValue":200}',
                'is_profile' => 0,
                'created_at' => '2022-04-04 21:49:21',
                'updated_at' => '2022-04-04 21:49:21',
            ),
            18 => 
            array (
                'id' => 113,
                'user_id' => 4,
                'thumb_id' => 113,
                'description' => '',
                'filter_data' => '{"ObjectScale":1,"OffsetY":0,"OffsetX":0,"ParallaxScale":0.0010000000474974513,"ParallaxReferencePlane":0.8999999761581421,"ParallaxIterations":4,"Alpha":0,"RyzStrength":0,"RyzIntensity":0,"RyzScanline":false,"RyzTint":0,"RyzVignette":0,"ryzScanLineSize":0,"RyzScanLinePower":0,"RetroStrength":0,"RetroGrainIntensity":0,"RetroGrainSize":0,"RetroSepiaTone":0,"RetroVignette":0,"GlamStrength":0,"GlamBrightness":0,"GlamContrast":0,"GlamSaturation":0,"GlamTint":0,"GlamBloom":0,"GrayStrength":0.48076626658439636,"GrayBrightness":0.9501980543136597,"GrayContrast":1.8436306715011597,"GrayBloom":1,"FireStrength":0,"FireParticleSize":0,"FireParticleAmount":0,"FireParticleSpeed":0,"FireParticleTint":0,"FilterSwitch":0,"Scanline":0,"ResetCheck":0,"IceCheck":0,"GlamCheck":0,"OriginalCheck":0,"GrayCheck":1,"SepiaCheck":0,"FireCheck":0,"FireAlphaCheck":0,"AutoAlphaVirtual":0,"AutoAlpha":0,"TransformX":0,"TransformY":0,"TransformZ":0,"FireRenderer":0,"VignetteRenderer":0,"BackRenderer":0,"VignetteAlphaValue":0,"OriginalImageWidth":512,"OriginalImageHeight":288,"UserGeneratedTextures":1,"BackgroundColor":0,"BackgroundAlpha":0,"minMiddleLayerValue":60,"maxMiddleLayerValue":200}',
                'is_profile' => 0,
                'created_at' => '2022-04-04 21:53:18',
                'updated_at' => '2022-04-04 21:53:18',
            ),
            19 => 
            array (
                'id' => 114,
                'user_id' => 4,
                'thumb_id' => 114,
                'description' => '',
                'filter_data' => '{"ObjectScale":1,"OffsetY":0,"OffsetX":0,"ParallaxScale":0.0010000000474974513,"ParallaxReferencePlane":0.8999999761581421,"ParallaxIterations":4,"Alpha":0,"RyzStrength":0,"RyzIntensity":0,"RyzScanline":false,"RyzTint":0,"RyzVignette":0.5,"ryzScanLineSize":0,"RyzScanLinePower":0,"RetroStrength":0,"RetroGrainIntensity":0,"RetroGrainSize":0,"RetroSepiaTone":0,"RetroVignette":0,"GlamStrength":0.7462632060050964,"GlamBrightness":1.3726998567581177,"GlamContrast":0.7565300464630127,"GlamSaturation":0.6604971885681152,"GlamTint":0,"GlamBloom":0,"GrayStrength":0,"GrayBrightness":0,"GrayContrast":0,"GrayBloom":0,"FireStrength":0,"FireParticleSize":0,"FireParticleAmount":0,"FireParticleSpeed":0,"FireParticleTint":0,"FilterSwitch":0,"Scanline":0,"ResetCheck":0,"IceCheck":0,"GlamCheck":1,"OriginalCheck":0,"GrayCheck":0,"SepiaCheck":0,"FireCheck":0,"FireAlphaCheck":0,"AutoAlphaVirtual":0,"AutoAlpha":0,"TransformX":0,"TransformY":0,"TransformZ":0,"FireRenderer":0,"VignetteRenderer":1,"BackRenderer":0,"VignetteAlphaValue":0,"OriginalImageWidth":512,"OriginalImageHeight":342,"UserGeneratedTextures":1,"BackgroundColor":0,"BackgroundAlpha":0,"minMiddleLayerValue":60,"maxMiddleLayerValue":200}',
                'is_profile' => 0,
                'created_at' => '2022-04-04 21:56:30',
                'updated_at' => '2022-04-04 21:56:30',
            ),
            20 => 
            array (
                'id' => 116,
                'user_id' => 4,
                'thumb_id' => 116,
                'description' => '',
                'filter_data' => '{"ObjectScale":1,"OffsetY":0,"OffsetX":0,"ParallaxScale":0.0010000000474974513,"ParallaxReferencePlane":0.8999999761581421,"ParallaxIterations":4,"Alpha":0,"RyzStrength":0.21646404266357422,"RyzIntensity":300.3114013671875,"RyzScanline":false,"RyzTint":0,"RyzVignette":0,"ryzScanLineSize":0,"RyzScanLinePower":0.7531014680862427,"RetroStrength":0,"RetroGrainIntensity":0,"RetroGrainSize":0,"RetroSepiaTone":0,"RetroVignette":0,"GlamStrength":0,"GlamBrightness":0,"GlamContrast":0,"GlamSaturation":0,"GlamTint":0,"GlamBloom":0,"GrayStrength":0,"GrayBrightness":0,"GrayContrast":0,"GrayBloom":0,"FireStrength":0,"FireParticleSize":0,"FireParticleAmount":0,"FireParticleSpeed":0,"FireParticleTint":0,"FilterSwitch":0,"Scanline":1,"ResetCheck":0,"IceCheck":1,"GlamCheck":0,"OriginalCheck":0,"GrayCheck":0,"SepiaCheck":0,"FireCheck":0,"FireAlphaCheck":0,"AutoAlphaVirtual":0,"AutoAlpha":0,"TransformX":0,"TransformY":0,"TransformZ":0,"FireRenderer":0,"VignetteRenderer":0,"BackRenderer":0,"VignetteAlphaValue":0,"OriginalImageWidth":512,"OriginalImageHeight":294,"UserGeneratedTextures":1,"BackgroundColor":0,"BackgroundAlpha":0,"minMiddleLayerValue":60,"maxMiddleLayerValue":200}',
                'is_profile' => 0,
                'created_at' => '2022-04-04 22:19:55',
                'updated_at' => '2022-04-04 22:19:55',
            ),
            21 => 
            array (
                'id' => 117,
                'user_id' => 4,
                'thumb_id' => 117,
                'description' => '',
                'filter_data' => '{"ObjectScale":1,"OffsetY":0,"OffsetX":0,"ParallaxScale":0.0010000000474974513,"ParallaxReferencePlane":0.8999999761581421,"ParallaxIterations":4,"Alpha":0,"RyzStrength":0,"RyzIntensity":0,"RyzScanline":false,"RyzTint":0,"RyzVignette":0.5,"ryzScanLineSize":0,"RyzScanLinePower":0,"RetroStrength":0.5,"RetroGrainIntensity":0.5,"RetroGrainSize":-250,"RetroSepiaTone":0,"RetroVignette":0,"GlamStrength":0.9166306853294373,"GlamBrightness":1.4925264120101929,"GlamContrast":1.7564384937286377,"GlamSaturation":0.4000232219696045,"GlamTint":0.798231303691864,"GlamBloom":0,"GrayStrength":0,"GrayBrightness":0,"GrayContrast":0,"GrayBloom":0,"FireStrength":0,"FireParticleSize":0,"FireParticleAmount":0,"FireParticleSpeed":0,"FireParticleTint":0,"FilterSwitch":0,"Scanline":0,"ResetCheck":0,"IceCheck":0,"GlamCheck":1,"OriginalCheck":0,"GrayCheck":0,"SepiaCheck":0,"FireCheck":0,"FireAlphaCheck":0,"AutoAlphaVirtual":0,"AutoAlpha":0,"TransformX":0,"TransformY":0,"TransformZ":0,"FireRenderer":0,"VignetteRenderer":1,"BackRenderer":0,"VignetteAlphaValue":0.5,"OriginalImageWidth":512,"OriginalImageHeight":341,"UserGeneratedTextures":1,"BackgroundColor":0,"BackgroundAlpha":0,"minMiddleLayerValue":60,"maxMiddleLayerValue":200}',
                'is_profile' => 0,
                'created_at' => '2022-04-04 22:24:31',
                'updated_at' => '2022-04-04 22:24:31',
            ),
            22 => 
            array (
                'id' => 118,
                'user_id' => 4,
                'thumb_id' => 118,
                'description' => '',
                'filter_data' => '{"ObjectScale":1,"OffsetY":0,"OffsetX":0,"ParallaxScale":0.0010000000474974513,"ParallaxReferencePlane":0.8999999761581421,"ParallaxIterations":4,"Alpha":0,"RyzStrength":0,"RyzIntensity":0,"RyzScanline":false,"RyzTint":0,"RyzVignette":0,"ryzScanLineSize":0,"RyzScanLinePower":0,"RetroStrength":0,"RetroGrainIntensity":0,"RetroGrainSize":0,"RetroSepiaTone":0,"RetroVignette":0,"GlamStrength":0,"GlamBrightness":0,"GlamContrast":0,"GlamSaturation":0,"GlamTint":0,"GlamBloom":0,"GrayStrength":0,"GrayBrightness":0,"GrayContrast":0,"GrayBloom":0,"FireStrength":0,"FireParticleSize":0,"FireParticleAmount":0,"FireParticleSpeed":0,"FireParticleTint":0,"FilterSwitch":0,"Scanline":0,"ResetCheck":0,"IceCheck":0,"GlamCheck":0,"OriginalCheck":1,"GrayCheck":0,"SepiaCheck":0,"FireCheck":0,"FireAlphaCheck":0,"AutoAlphaVirtual":0,"AutoAlpha":0,"TransformX":0,"TransformY":0,"TransformZ":0,"FireRenderer":0,"VignetteRenderer":0,"BackRenderer":0,"VignetteAlphaValue":0,"OriginalImageWidth":512,"OriginalImageHeight":341,"UserGeneratedTextures":1,"BackgroundColor":0,"BackgroundAlpha":0,"minMiddleLayerValue":60,"maxMiddleLayerValue":200}',
                'is_profile' => 0,
                'created_at' => '2022-04-04 22:28:16',
                'updated_at' => '2022-04-04 22:28:16',
            ),
            23 => 
            array (
                'id' => 119,
                'user_id' => 4,
                'thumb_id' => 119,
                'description' => '',
                'filter_data' => '{"ObjectScale":1,"OffsetY":0,"OffsetX":0,"ParallaxScale":0.0010000000474974513,"ParallaxReferencePlane":0.8999999761581421,"ParallaxIterations":4,"Alpha":0,"RyzStrength":0.6239057779312134,"RyzIntensity":17.985286712646484,"RyzScanline":false,"RyzTint":0.11555709689855576,"RyzVignette":0.5,"ryzScanLineSize":0,"RyzScanLinePower":0.6848427057266235,"RetroStrength":0,"RetroGrainIntensity":0,"RetroGrainSize":0,"RetroSepiaTone":0,"RetroVignette":0,"GlamStrength":0,"GlamBrightness":0,"GlamContrast":0,"GlamSaturation":0,"GlamTint":0,"GlamBloom":0,"GrayStrength":0,"GrayBrightness":0,"GrayContrast":0,"GrayBloom":0,"FireStrength":0,"FireParticleSize":0,"FireParticleAmount":0,"FireParticleSpeed":0,"FireParticleTint":0,"FilterSwitch":0,"Scanline":1,"ResetCheck":0,"IceCheck":1,"GlamCheck":0,"OriginalCheck":0,"GrayCheck":0,"SepiaCheck":0,"FireCheck":0,"FireAlphaCheck":0,"AutoAlphaVirtual":0,"AutoAlpha":0,"TransformX":0,"TransformY":0,"TransformZ":0,"FireRenderer":0,"VignetteRenderer":1,"BackRenderer":0,"VignetteAlphaValue":0.5,"OriginalImageWidth":512,"OriginalImageHeight":308,"UserGeneratedTextures":1,"BackgroundColor":0,"BackgroundAlpha":0,"minMiddleLayerValue":60,"maxMiddleLayerValue":200}',
                'is_profile' => 0,
                'created_at' => '2022-04-04 22:33:32',
                'updated_at' => '2022-04-04 22:33:32',
            ),
            24 => 
            array (
                'id' => 120,
                'user_id' => 4,
                'thumb_id' => 120,
                'description' => '',
                'filter_data' => '{"ObjectScale":1,"OffsetY":0,"OffsetX":0,"ParallaxScale":0.0010000000474974513,"ParallaxReferencePlane":0.8999999761581421,"ParallaxIterations":4,"Alpha":0,"RyzStrength":0,"RyzIntensity":0,"RyzScanline":false,"RyzTint":0,"RyzVignette":0,"ryzScanLineSize":0,"RyzScanLinePower":0,"RetroStrength":0,"RetroGrainIntensity":0,"RetroGrainSize":0,"RetroSepiaTone":0,"RetroVignette":0,"GlamStrength":0,"GlamBrightness":0,"GlamContrast":0,"GlamSaturation":0,"GlamTint":0,"GlamBloom":0,"GrayStrength":0,"GrayBrightness":0,"GrayContrast":0,"GrayBloom":0,"FireStrength":0,"FireParticleSize":0,"FireParticleAmount":0,"FireParticleSpeed":0,"FireParticleTint":0,"FilterSwitch":0,"Scanline":0,"ResetCheck":0,"IceCheck":0,"GlamCheck":0,"OriginalCheck":1,"GrayCheck":0,"SepiaCheck":0,"FireCheck":0,"FireAlphaCheck":0,"AutoAlphaVirtual":0,"AutoAlpha":0,"TransformX":0,"TransformY":0,"TransformZ":0,"FireRenderer":0,"VignetteRenderer":0,"BackRenderer":0,"VignetteAlphaValue":0,"OriginalImageWidth":512,"OriginalImageHeight":326,"UserGeneratedTextures":1,"BackgroundColor":0,"BackgroundAlpha":0,"minMiddleLayerValue":60,"maxMiddleLayerValue":200}',
                'is_profile' => 0,
                'created_at' => '2022-04-04 22:38:48',
                'updated_at' => '2022-04-04 22:38:48',
            ),
            25 => 
            array (
                'id' => 122,
                'user_id' => 4,
                'thumb_id' => 122,
                'description' => '',
                'filter_data' => '{"ObjectScale":1,"OffsetY":0,"OffsetX":0,"ParallaxScale":0.0010000000474974513,"ParallaxReferencePlane":0.8999999761581421,"ParallaxIterations":4,"Alpha":0,"RyzStrength":0.8111793994903564,"RyzIntensity":358.624267578125,"RyzScanline":false,"RyzTint":0,"RyzVignette":0,"ryzScanLineSize":0,"RyzScanLinePower":0.882039487361908,"RetroStrength":0,"RetroGrainIntensity":0,"RetroGrainSize":0,"RetroSepiaTone":0,"RetroVignette":0,"GlamStrength":0,"GlamBrightness":0,"GlamContrast":0,"GlamSaturation":0,"GlamTint":0,"GlamBloom":0,"GrayStrength":0,"GrayBrightness":0,"GrayContrast":0,"GrayBloom":0,"FireStrength":0,"FireParticleSize":0,"FireParticleAmount":0,"FireParticleSpeed":0,"FireParticleTint":0,"FilterSwitch":0,"Scanline":1,"ResetCheck":0,"IceCheck":1,"GlamCheck":0,"OriginalCheck":0,"GrayCheck":0,"SepiaCheck":0,"FireCheck":0,"FireAlphaCheck":0,"AutoAlphaVirtual":0,"AutoAlpha":0,"TransformX":0,"TransformY":0,"TransformZ":0,"FireRenderer":0,"VignetteRenderer":0,"BackRenderer":0,"VignetteAlphaValue":0,"OriginalImageWidth":512,"OriginalImageHeight":288,"UserGeneratedTextures":1,"BackgroundColor":0,"BackgroundAlpha":0,"minMiddleLayerValue":60,"maxMiddleLayerValue":200}',
                'is_profile' => 0,
                'created_at' => '2022-04-04 22:47:17',
                'updated_at' => '2022-04-04 22:47:17',
            ),
            26 => 
            array (
                'id' => 123,
                'user_id' => 4,
                'thumb_id' => 123,
                'description' => '',
                'filter_data' => '{"ObjectScale":1,"OffsetY":0,"OffsetX":0,"ParallaxScale":0.0010000000474974513,"ParallaxReferencePlane":0.8999999761581421,"ParallaxIterations":4,"Alpha":0,"RyzStrength":0,"RyzIntensity":0,"RyzScanline":false,"RyzTint":0,"RyzVignette":0,"ryzScanLineSize":0,"RyzScanLinePower":0,"RetroStrength":0.18707258999347687,"RetroGrainIntensity":0.6004365682601929,"RetroGrainSize":-425.82073974609375,"RetroSepiaTone":0,"RetroVignette":0,"GlamStrength":0,"GlamBrightness":0,"GlamContrast":0,"GlamSaturation":0,"GlamTint":0,"GlamBloom":0,"GrayStrength":0,"GrayBrightness":0,"GrayContrast":0,"GrayBloom":0,"FireStrength":0,"FireParticleSize":0,"FireParticleAmount":0,"FireParticleSpeed":0,"FireParticleTint":0,"FilterSwitch":0,"Scanline":0,"ResetCheck":0,"IceCheck":0,"GlamCheck":0,"OriginalCheck":0,"GrayCheck":0,"SepiaCheck":1,"FireCheck":0,"FireAlphaCheck":0,"AutoAlphaVirtual":0,"AutoAlpha":0,"TransformX":0,"TransformY":0,"TransformZ":0,"FireRenderer":0,"VignetteRenderer":0,"BackRenderer":0,"VignetteAlphaValue":0,"OriginalImageWidth":512,"OriginalImageHeight":341,"UserGeneratedTextures":1,"BackgroundColor":0,"BackgroundAlpha":0,"minMiddleLayerValue":60,"maxMiddleLayerValue":200}',
                'is_profile' => 0,
                'created_at' => '2022-04-04 22:51:26',
                'updated_at' => '2022-04-04 22:51:26',
            ),
            27 => 
            array (
                'id' => 125,
                'user_id' => 4,
                'thumb_id' => 125,
                'description' => '',
                'filter_data' => '{"ObjectScale":1,"OffsetY":0,"OffsetX":0,"ParallaxScale":0.0010000000474974513,"ParallaxReferencePlane":0.8999999761581421,"ParallaxIterations":4,"Alpha":0,"RyzStrength":0,"RyzIntensity":0,"RyzScanline":false,"RyzTint":0,"RyzVignette":0,"ryzScanLineSize":0,"RyzScanLinePower":0,"RetroStrength":0,"RetroGrainIntensity":0,"RetroGrainSize":0,"RetroSepiaTone":0,"RetroVignette":0,"GlamStrength":0,"GlamBrightness":0,"GlamContrast":0,"GlamSaturation":0,"GlamTint":0,"GlamBloom":0,"GrayStrength":0,"GrayBrightness":0,"GrayContrast":0,"GrayBloom":0,"FireStrength":0,"FireParticleSize":0,"FireParticleAmount":0,"FireParticleSpeed":0,"FireParticleTint":0,"FilterSwitch":0,"Scanline":0,"ResetCheck":0,"IceCheck":0,"GlamCheck":0,"OriginalCheck":1,"GrayCheck":0,"SepiaCheck":0,"FireCheck":0,"FireAlphaCheck":0,"AutoAlphaVirtual":0,"AutoAlpha":0,"TransformX":0,"TransformY":0,"TransformZ":0,"FireRenderer":0,"VignetteRenderer":0,"BackRenderer":0,"VignetteAlphaValue":0,"OriginalImageWidth":512,"OriginalImageHeight":332,"UserGeneratedTextures":1,"BackgroundColor":0,"BackgroundAlpha":0,"minMiddleLayerValue":60,"maxMiddleLayerValue":200}',
                'is_profile' => 0,
                'created_at' => '2022-04-04 23:00:38',
                'updated_at' => '2022-04-04 23:00:38',
            ),
            28 => 
            array (
                'id' => 147,
                'user_id' => 4,
                'thumb_id' => 147,
                'description' => '',
                'filter_data' => '{"ObjectScale":1,"OffsetY":0,"OffsetX":0,"ParallaxScale":0.0010000000474974513,"ParallaxReferencePlane":0.8999999761581421,"ParallaxIterations":4,"Alpha":0,"RyzStrength":0,"RyzIntensity":0,"RyzScanline":false,"RyzTint":0,"RyzVignette":0,"ryzScanLineSize":0,"RyzScanLinePower":0,"RetroStrength":0,"RetroGrainIntensity":0,"RetroGrainSize":0,"RetroSepiaTone":0,"RetroVignette":0,"GlamStrength":0,"GlamBrightness":0,"GlamContrast":0,"GlamSaturation":0,"GlamTint":0,"GlamBloom":0,"GrayStrength":0,"GrayBrightness":0,"GrayContrast":0,"GrayBloom":0,"FireStrength":0,"FireParticleSize":0,"FireParticleAmount":0,"FireParticleSpeed":0,"FireParticleTint":0,"FilterSwitch":0,"Scanline":0,"ResetCheck":0,"IceCheck":0,"GlamCheck":0,"OriginalCheck":1,"GrayCheck":0,"SepiaCheck":0,"FireCheck":0,"FireAlphaCheck":0,"AutoAlphaVirtual":0,"AutoAlpha":0,"TransformX":0,"TransformY":0,"TransformZ":0,"FireRenderer":0,"VignetteRenderer":0,"BackRenderer":0,"VignetteAlphaValue":0,"OriginalImageWidth":512,"OriginalImageHeight":342,"UserGeneratedTextures":1,"BackgroundColor":0,"BackgroundAlpha":0,"minMiddleLayerValue":60,"maxMiddleLayerValue":200}',
                'is_profile' => 0,
                'created_at' => '2022-04-07 16:05:00',
                'updated_at' => '2022-04-07 16:05:00',
            ),
            29 => 
            array (
                'id' => 150,
                'user_id' => 4,
                'thumb_id' => 150,
                'description' => '',
                'filter_data' => '{"ObjectScale":1,"OffsetY":0,"OffsetX":0,"ParallaxScale":0.0010000000474974513,"ParallaxReferencePlane":0.8999999761581421,"ParallaxIterations":4,"Alpha":0,"RyzStrength":0,"RyzIntensity":0,"RyzScanline":false,"RyzTint":0,"RyzVignette":0,"ryzScanLineSize":0,"RyzScanLinePower":0,"RetroStrength":0,"RetroGrainIntensity":0,"RetroGrainSize":0,"RetroSepiaTone":0,"RetroVignette":0,"GlamStrength":0,"GlamBrightness":0,"GlamContrast":0,"GlamSaturation":0,"GlamTint":0,"GlamBloom":0,"GrayStrength":0,"GrayBrightness":0,"GrayContrast":0,"GrayBloom":0,"FireStrength":0,"FireParticleSize":0,"FireParticleAmount":0,"FireParticleSpeed":0,"FireParticleTint":0,"FilterSwitch":0,"Scanline":0,"ResetCheck":0,"IceCheck":0,"GlamCheck":0,"OriginalCheck":1,"GrayCheck":0,"SepiaCheck":0,"FireCheck":0,"FireAlphaCheck":0,"AutoAlphaVirtual":0,"AutoAlpha":0,"TransformX":0,"TransformY":0,"TransformZ":0,"FireRenderer":0,"VignetteRenderer":0,"BackRenderer":0,"VignetteAlphaValue":0,"OriginalImageWidth":512,"OriginalImageHeight":341,"UserGeneratedTextures":1,"BackgroundColor":0,"BackgroundAlpha":0,"minMiddleLayerValue":60,"maxMiddleLayerValue":200}',
                'is_profile' => 0,
                'created_at' => '2022-04-07 18:37:35',
                'updated_at' => '2022-04-07 18:37:35',
            ),
            30 => 
            array (
                'id' => 154,
                'user_id' => 4,
                'thumb_id' => 154,
                'description' => '',
                'filter_data' => '{"ObjectScale":1,"OffsetY":0,"OffsetX":0,"ParallaxScale":0.0010000000474974513,"ParallaxReferencePlane":0.8999999761581421,"ParallaxIterations":4,"Alpha":0,"RyzStrength":0,"RyzIntensity":0,"RyzScanline":false,"RyzTint":0,"RyzVignette":0,"ryzScanLineSize":0,"RyzScanLinePower":0,"RetroStrength":0,"RetroGrainIntensity":0,"RetroGrainSize":0,"RetroSepiaTone":0,"RetroVignette":0,"GlamStrength":0,"GlamBrightness":0,"GlamContrast":0,"GlamSaturation":0,"GlamTint":0,"GlamBloom":0,"GrayStrength":0,"GrayBrightness":0,"GrayContrast":0,"GrayBloom":0,"FireStrength":0,"FireParticleSize":0,"FireParticleAmount":0,"FireParticleSpeed":0,"FireParticleTint":0,"FilterSwitch":0,"Scanline":0,"ResetCheck":0,"IceCheck":0,"GlamCheck":0,"OriginalCheck":1,"GrayCheck":0,"SepiaCheck":0,"FireCheck":0,"FireAlphaCheck":0,"AutoAlphaVirtual":0,"AutoAlpha":0,"TransformX":0,"TransformY":0,"TransformZ":0,"FireRenderer":0,"VignetteRenderer":0,"BackRenderer":0,"VignetteAlphaValue":0,"OriginalImageWidth":512,"OriginalImageHeight":341,"UserGeneratedTextures":1,"BackgroundColor":0,"BackgroundAlpha":0,"minMiddleLayerValue":60,"maxMiddleLayerValue":200}',
                'is_profile' => 0,
                'created_at' => '2022-04-07 18:56:37',
                'updated_at' => '2022-04-07 18:56:37',
            ),
            31 => 
            array (
                'id' => 155,
                'user_id' => 4,
                'thumb_id' => 155,
                'description' => '',
                'filter_data' => '{"ObjectScale":1,"OffsetY":0,"OffsetX":0,"ParallaxScale":0.0010000000474974513,"ParallaxReferencePlane":0.8999999761581421,"ParallaxIterations":4,"Alpha":0,"RyzStrength":0,"RyzIntensity":0,"RyzScanline":false,"RyzTint":0,"RyzVignette":0,"ryzScanLineSize":0,"RyzScanLinePower":0,"RetroStrength":0,"RetroGrainIntensity":0,"RetroGrainSize":0,"RetroSepiaTone":0,"RetroVignette":0,"GlamStrength":0,"GlamBrightness":0,"GlamContrast":0,"GlamSaturation":0,"GlamTint":0,"GlamBloom":0,"GrayStrength":0.6197434663772583,"GrayBrightness":1.403048038482666,"GrayContrast":1.6592559814453125,"GrayBloom":0.6465118527412415,"FireStrength":0,"FireParticleSize":0,"FireParticleAmount":0,"FireParticleSpeed":0,"FireParticleTint":0,"FilterSwitch":0,"Scanline":0,"ResetCheck":0,"IceCheck":0,"GlamCheck":0,"OriginalCheck":0,"GrayCheck":1,"SepiaCheck":0,"FireCheck":0,"FireAlphaCheck":0,"AutoAlphaVirtual":0,"AutoAlpha":0,"TransformX":0,"TransformY":0,"TransformZ":0,"FireRenderer":0,"VignetteRenderer":0,"BackRenderer":0,"VignetteAlphaValue":0,"OriginalImageWidth":512,"OriginalImageHeight":341,"UserGeneratedTextures":1,"BackgroundColor":0,"BackgroundAlpha":0,"minMiddleLayerValue":60,"maxMiddleLayerValue":200}',
                'is_profile' => 0,
                'created_at' => '2022-04-07 19:00:08',
                'updated_at' => '2022-04-07 19:00:08',
            ),
            32 => 
            array (
                'id' => 157,
                'user_id' => 4,
                'thumb_id' => 157,
                'description' => '',
                'filter_data' => '{"ObjectScale":1,"OffsetY":0,"OffsetX":0,"ParallaxScale":0.0010000000474974513,"ParallaxReferencePlane":0.8999999761581421,"ParallaxIterations":4,"Alpha":0,"RyzStrength":0,"RyzIntensity":0,"RyzScanline":false,"RyzTint":0,"RyzVignette":0.5,"ryzScanLineSize":0,"RyzScanLinePower":0,"RetroStrength":0,"RetroGrainIntensity":0,"RetroGrainSize":0,"RetroSepiaTone":0,"RetroVignette":0,"GlamStrength":0.29876911640167236,"GlamBrightness":1.4987833499908447,"GlamContrast":1.2318713665008545,"GlamSaturation":0.632842481136322,"GlamTint":0,"GlamBloom":0,"GrayStrength":0,"GrayBrightness":0,"GrayContrast":0,"GrayBloom":0,"FireStrength":0,"FireParticleSize":0,"FireParticleAmount":0,"FireParticleSpeed":0,"FireParticleTint":0,"FilterSwitch":0,"Scanline":0,"ResetCheck":0,"IceCheck":0,"GlamCheck":1,"OriginalCheck":0,"GrayCheck":0,"SepiaCheck":0,"FireCheck":0,"FireAlphaCheck":0,"AutoAlphaVirtual":0,"AutoAlpha":0,"TransformX":0,"TransformY":0,"TransformZ":0,"FireRenderer":0,"VignetteRenderer":1,"BackRenderer":0,"VignetteAlphaValue":0,"OriginalImageWidth":512,"OriginalImageHeight":342,"UserGeneratedTextures":1,"BackgroundColor":0,"BackgroundAlpha":0,"minMiddleLayerValue":60,"maxMiddleLayerValue":200}',
                'is_profile' => 0,
                'created_at' => '2022-04-11 15:51:17',
                'updated_at' => '2022-04-11 15:51:17',
            ),
            33 => 
            array (
                'id' => 168,
                'user_id' => 4,
                'thumb_id' => 168,
                'description' => 'pup',
                'filter_data' => '{"ObjectScale":1,"OffsetY":0,"OffsetX":0,"ParallaxScale":0.0010000000474974513,"ParallaxReferencePlane":0.8999999761581421,"ParallaxIterations":4,"Alpha":0,"RyzStrength":0,"RyzIntensity":0,"RyzScanline":false,"RyzTint":0,"RyzVignette":0.5,"ryzScanLineSize":0,"RyzScanLinePower":0,"RetroStrength":0,"RetroGrainIntensity":0,"RetroGrainSize":0,"RetroSepiaTone":0,"RetroVignette":0,"GlamStrength":0.3698269724845886,"GlamBrightness":1.6479593515396118,"GlamContrast":1.4383958578109741,"GlamSaturation":0.6381178498268127,"GlamTint":0.13825999200344086,"GlamBloom":0,"GrayStrength":0,"GrayBrightness":0,"GrayContrast":0,"GrayBloom":0,"FireStrength":0,"FireParticleSize":0,"FireParticleAmount":0,"FireParticleSpeed":0,"FireParticleTint":0,"FilterSwitch":0,"Scanline":0,"ResetCheck":0,"IceCheck":0,"GlamCheck":1,"OriginalCheck":0,"GrayCheck":0,"SepiaCheck":0,"FireCheck":0,"FireAlphaCheck":0,"AutoAlphaVirtual":0,"AutoAlpha":0,"TransformX":0,"TransformY":0,"TransformZ":0,"FireRenderer":0,"VignetteRenderer":1,"BackRenderer":0,"VignetteAlphaValue":0,"OriginalImageWidth":512,"OriginalImageHeight":267,"UserGeneratedTextures":1,"BackgroundColor":0,"BackgroundAlpha":0,"minMiddleLayerValue":60,"maxMiddleLayerValue":200}',
                'is_profile' => 0,
                'created_at' => '2022-04-12 21:28:52',
                'updated_at' => '2022-04-12 21:28:52',
            ),
            34 => 
            array (
                'id' => 169,
                'user_id' => 4,
                'thumb_id' => 169,
                'description' => 'rawr',
                'filter_data' => '{"ObjectScale":1,"OffsetY":0,"OffsetX":0,"ParallaxScale":0.0010000000474974513,"ParallaxReferencePlane":0.8999999761581421,"ParallaxIterations":4,"Alpha":0,"RyzStrength":0,"RyzIntensity":0,"RyzScanline":false,"RyzTint":0,"RyzVignette":0,"ryzScanLineSize":0,"RyzScanLinePower":0,"RetroStrength":0,"RetroGrainIntensity":0,"RetroGrainSize":0,"RetroSepiaTone":0,"RetroVignette":0,"GlamStrength":0,"GlamBrightness":0,"GlamContrast":0,"GlamSaturation":0,"GlamTint":0,"GlamBloom":0,"GrayStrength":0,"GrayBrightness":0,"GrayContrast":0,"GrayBloom":0,"FireStrength":0,"FireParticleSize":0,"FireParticleAmount":0,"FireParticleSpeed":0,"FireParticleTint":0,"FilterSwitch":0,"Scanline":0,"ResetCheck":0,"IceCheck":0,"GlamCheck":0,"OriginalCheck":1,"GrayCheck":0,"SepiaCheck":0,"FireCheck":0,"FireAlphaCheck":0,"AutoAlphaVirtual":0,"AutoAlpha":0,"TransformX":0,"TransformY":0,"TransformZ":0,"FireRenderer":0,"VignetteRenderer":0,"BackRenderer":0,"VignetteAlphaValue":0,"OriginalImageWidth":512,"OriginalImageHeight":308,"UserGeneratedTextures":1,"BackgroundColor":0,"BackgroundAlpha":0,"minMiddleLayerValue":60,"maxMiddleLayerValue":200}',
                'is_profile' => 0,
                'created_at' => '2022-04-12 21:30:59',
                'updated_at' => '2022-04-12 21:30:59',
            ),
            35 => 
            array (
                'id' => 170,
                'user_id' => 4,
                'thumb_id' => 170,
                'description' => 'mmm....',
                'filter_data' => '{"ObjectScale":1,"OffsetY":0,"OffsetX":0,"ParallaxScale":0.0010000000474974513,"ParallaxReferencePlane":0.8999999761581421,"ParallaxIterations":4,"Alpha":0,"RyzStrength":0,"RyzIntensity":0,"RyzScanline":false,"RyzTint":0,"RyzVignette":0.210204616189003,"ryzScanLineSize":0,"RyzScanLinePower":0,"RetroStrength":0.3178267478942871,"RetroGrainIntensity":0.44261711835861206,"RetroGrainSize":-314.8326721191406,"RetroSepiaTone":0,"RetroVignette":0,"GlamStrength":0,"GlamBrightness":0,"GlamContrast":0,"GlamSaturation":0,"GlamTint":0,"GlamBloom":0,"GrayStrength":0,"GrayBrightness":0,"GrayContrast":0,"GrayBloom":0,"FireStrength":0,"FireParticleSize":0,"FireParticleAmount":0,"FireParticleSpeed":0,"FireParticleTint":0,"FilterSwitch":0,"Scanline":0,"ResetCheck":0,"IceCheck":0,"GlamCheck":0,"OriginalCheck":0,"GrayCheck":0,"SepiaCheck":1,"FireCheck":0,"FireAlphaCheck":0,"AutoAlphaVirtual":0,"AutoAlpha":0,"TransformX":0,"TransformY":0,"TransformZ":0,"FireRenderer":0,"VignetteRenderer":1,"BackRenderer":0,"VignetteAlphaValue":0.210204616189003,"OriginalImageWidth":512,"OriginalImageHeight":341,"UserGeneratedTextures":1,"BackgroundColor":0,"BackgroundAlpha":0,"minMiddleLayerValue":60,"maxMiddleLayerValue":200}',
                'is_profile' => 0,
                'created_at' => '2022-04-12 21:35:15',
                'updated_at' => '2022-04-12 21:35:15',
            ),
            36 => 
            array (
                'id' => 171,
                'user_id' => 4,
                'thumb_id' => 171,
                'description' => 'beautiful',
                'filter_data' => '{"ObjectScale":1,"OffsetY":0,"OffsetX":0,"ParallaxScale":0.0010000000474974513,"ParallaxReferencePlane":0.8999999761581421,"ParallaxIterations":4,"Alpha":0,"RyzStrength":0,"RyzIntensity":0,"RyzScanline":false,"RyzTint":0,"RyzVignette":0.5,"ryzScanLineSize":0,"RyzScanLinePower":0,"RetroStrength":0,"RetroGrainIntensity":0,"RetroGrainSize":0,"RetroSepiaTone":0,"RetroVignette":0,"GlamStrength":0.17830605804920197,"GlamBrightness":1.5975823402404785,"GlamContrast":1.3096979856491089,"GlamSaturation":1,"GlamTint":0,"GlamBloom":0,"GrayStrength":0,"GrayBrightness":0,"GrayContrast":0,"GrayBloom":0,"FireStrength":0,"FireParticleSize":0,"FireParticleAmount":0,"FireParticleSpeed":0,"FireParticleTint":0,"FilterSwitch":0,"Scanline":0,"ResetCheck":0,"IceCheck":0,"GlamCheck":1,"OriginalCheck":0,"GrayCheck":0,"SepiaCheck":0,"FireCheck":0,"FireAlphaCheck":0,"AutoAlphaVirtual":0,"AutoAlpha":0,"TransformX":0,"TransformY":0,"TransformZ":0,"FireRenderer":0,"VignetteRenderer":1,"BackRenderer":0,"VignetteAlphaValue":0,"OriginalImageWidth":512,"OriginalImageHeight":232,"UserGeneratedTextures":1,"BackgroundColor":0,"BackgroundAlpha":0,"minMiddleLayerValue":60,"maxMiddleLayerValue":200}',
                'is_profile' => 0,
                'created_at' => '2022-04-12 21:39:39',
                'updated_at' => '2022-04-12 21:39:39',
            ),
            37 => 
            array (
                'id' => 174,
                'user_id' => 4,
                'thumb_id' => 174,
                'description' => '',
                'filter_data' => '{"ObjectScale":1,"OffsetY":0,"OffsetX":0,"ParallaxScale":0.0010000000474974513,"ParallaxReferencePlane":0.8999999761581421,"ParallaxIterations":4,"Alpha":0,"RyzStrength":0,"RyzIntensity":0,"RyzScanline":false,"RyzTint":0,"RyzVignette":0,"ryzScanLineSize":0,"RyzScanLinePower":0,"RetroStrength":0.12428438663482666,"RetroGrainIntensity":0.6435102820396423,"RetroGrainSize":-391.51409912109375,"RetroSepiaTone":0,"RetroVignette":0,"GlamStrength":0,"GlamBrightness":0,"GlamContrast":0,"GlamSaturation":0,"GlamTint":0,"GlamBloom":0,"GrayStrength":0,"GrayBrightness":0,"GrayContrast":0,"GrayBloom":0,"FireStrength":0,"FireParticleSize":0,"FireParticleAmount":0,"FireParticleSpeed":0,"FireParticleTint":0,"FilterSwitch":0,"Scanline":0,"ResetCheck":0,"IceCheck":0,"GlamCheck":0,"OriginalCheck":0,"GrayCheck":0,"SepiaCheck":1,"FireCheck":0,"FireAlphaCheck":0,"AutoAlphaVirtual":0,"AutoAlpha":0,"TransformX":0,"TransformY":0,"TransformZ":0,"FireRenderer":0,"VignetteRenderer":0,"BackRenderer":0,"VignetteAlphaValue":0,"OriginalImageWidth":512,"OriginalImageHeight":341,"UserGeneratedTextures":1,"BackgroundColor":0,"BackgroundAlpha":0,"minMiddleLayerValue":60,"maxMiddleLayerValue":200}',
                'is_profile' => 0,
                'created_at' => '2022-04-12 21:52:27',
                'updated_at' => '2022-04-12 21:52:27',
            ),
            38 => 
            array (
                'id' => 175,
                'user_id' => 4,
                'thumb_id' => 175,
                'description' => '',
                'filter_data' => '{"ObjectScale":1,"OffsetY":0,"OffsetX":0,"ParallaxScale":0.0010000000474974513,"ParallaxReferencePlane":0.8999999761581421,"ParallaxIterations":4,"Alpha":0,"RyzStrength":0,"RyzIntensity":0,"RyzScanline":false,"RyzTint":0,"RyzVignette":0.5,"ryzScanLineSize":0,"RyzScanLinePower":0,"RetroStrength":0,"RetroGrainIntensity":0,"RetroGrainSize":0,"RetroSepiaTone":0,"RetroVignette":0,"GlamStrength":0.350356787443161,"GlamBrightness":2,"GlamContrast":1.6111594438552856,"GlamSaturation":0.7276117205619812,"GlamTint":0,"GlamBloom":0,"GrayStrength":0,"GrayBrightness":0,"GrayContrast":0,"GrayBloom":0,"FireStrength":0,"FireParticleSize":0,"FireParticleAmount":0,"FireParticleSpeed":0,"FireParticleTint":0,"FilterSwitch":0,"Scanline":0,"ResetCheck":0,"IceCheck":0,"GlamCheck":1,"OriginalCheck":0,"GrayCheck":0,"SepiaCheck":0,"FireCheck":0,"FireAlphaCheck":0,"AutoAlphaVirtual":0,"AutoAlpha":0,"TransformX":0,"TransformY":0,"TransformZ":0,"FireRenderer":0,"VignetteRenderer":1,"BackRenderer":0,"VignetteAlphaValue":0,"OriginalImageWidth":512,"OriginalImageHeight":241,"UserGeneratedTextures":1,"BackgroundColor":0,"BackgroundAlpha":0,"minMiddleLayerValue":60,"maxMiddleLayerValue":200}',
                'is_profile' => 0,
                'created_at' => '2022-04-12 21:58:19',
                'updated_at' => '2022-04-12 21:58:19',
            ),
        ));
        
        
    }
}