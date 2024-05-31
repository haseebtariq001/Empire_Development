(function(){
    var script = {
 "mouseWheelEnabled": true,
 "definitions": [{
 "automaticZoomSpeed": 10,
 "class": "PanoramaCamera",
 "initialPosition": {
  "yaw": 0,
  "class": "PanoramaCameraPosition",
  "pitch": 0
 },
 "id": "panorama_5FE2FE4F_559B_FC2C_41A4_BE2E6B3732EE_camera",
 "initialSequence": {
  "restartMovementOnUserInteraction": false,
  "movements": [
   {
    "yawDelta": 18.5,
    "yawSpeed": 7.96,
    "easing": "cubic_in",
    "class": "DistancePanoramaCameraMovement"
   },
   {
    "yawDelta": 323,
    "yawSpeed": 7.96,
    "easing": "linear",
    "class": "DistancePanoramaCameraMovement"
   },
   {
    "yawDelta": 18.5,
    "yawSpeed": 7.96,
    "easing": "cubic_out",
    "class": "DistancePanoramaCameraMovement"
   }
  ],
  "class": "PanoramaCameraSequence"
 }
},
{
 "automaticZoomSpeed": 10,
 "class": "PanoramaCamera",
 "initialPosition": {
  "yaw": 0,
  "class": "PanoramaCameraPosition",
  "pitch": 0
 },
 "id": "panorama_5F002981_559A_2414_41B3_6BC2B132EDF2_camera",
 "initialSequence": {
  "restartMovementOnUserInteraction": false,
  "movements": [
   {
    "yawDelta": 18.5,
    "yawSpeed": 7.96,
    "easing": "cubic_in",
    "class": "DistancePanoramaCameraMovement"
   },
   {
    "yawDelta": 323,
    "yawSpeed": 7.96,
    "easing": "linear",
    "class": "DistancePanoramaCameraMovement"
   },
   {
    "yawDelta": 18.5,
    "yawSpeed": 7.96,
    "easing": "cubic_out",
    "class": "DistancePanoramaCameraMovement"
   }
  ],
  "class": "PanoramaCameraSequence"
 }
},
{
 "hfovMax": 130,
 "adjacentPanoramas": [
  {
   "class": "AdjacentPanorama",
   "panorama": "this.panorama_5FE12600_559B_EC14_41D4_D4C725CB8C27"
  },
  {
   "class": "AdjacentPanorama",
   "panorama": "this.panorama_5FEE165D_559B_EC2D_41C4_63B135524787"
  },
  {
   "class": "AdjacentPanorama",
   "panorama": "this.panorama_5FF43B4B_559A_2414_41A8_7B6F9A305344"
  }
 ],
 "hfovMin": "150%",
 "frames": [
  {
   "stereoCube": {
    "class": "ImageResource",
    "levels": [
     {
      "url": "media/panorama_5FE2FE4F_559B_FC2C_41A4_BE2E6B3732EE_0/0/{row}_{column}.jpg",
      "rowCount": 3,
      "class": "TiledImageResourceLevel",
      "tags": "ondemand",
      "width": 18432,
      "colCount": 36,
      "height": 1536
     },
     {
      "url": "media/panorama_5FE2FE4F_559B_FC2C_41A4_BE2E6B3732EE_0/1/{row}_{column}.jpg",
      "rowCount": 2,
      "class": "TiledImageResourceLevel",
      "tags": "ondemand",
      "width": 12288,
      "colCount": 24,
      "height": 1024
     },
     {
      "url": "media/panorama_5FE2FE4F_559B_FC2C_41A4_BE2E6B3732EE_0/2/{row}_{column}.jpg",
      "rowCount": 1,
      "class": "TiledImageResourceLevel",
      "tags": [
       "ondemand",
       "preload"
      ],
      "width": 6144,
      "colCount": 12,
      "height": 512
     }
    ]
   },
   "class": "CubicPanoramaFrame",
   "thumbnailUrl": "media/panorama_5FE2FE4F_559B_FC2C_41A4_BE2E6B3732EE_t.jpg"
  }
 ],
 "vfov": 180,
 "hfov": 360,
 "label": "bed1",
 "id": "panorama_5FE2FE4F_559B_FC2C_41A4_BE2E6B3732EE",
 "thumbnailUrl": "media/panorama_5FE2FE4F_559B_FC2C_41A4_BE2E6B3732EE_t.jpg",
 "partial": false,
 "class": "Panorama",
 "pitch": 0,
 "overlays": [
  "this.overlay_4572E768_55AA_2C14_41CB_36F8A5D72FD4",
  "this.overlay_44D884AD_55AA_2C6D_41C4_75D788BF4B86",
  "this.overlay_44C908DC_55BA_642C_41AC_C3C39E5B17E2"
 ]
},
{
 "automaticZoomSpeed": 10,
 "class": "PanoramaCamera",
 "initialPosition": {
  "yaw": 0,
  "class": "PanoramaCameraPosition",
  "pitch": 0
 },
 "id": "panorama_5FE05EA7_559B_DC1C_41CC_82457BE41622_camera",
 "initialSequence": {
  "restartMovementOnUserInteraction": false,
  "movements": [
   {
    "yawDelta": 18.5,
    "yawSpeed": 7.96,
    "easing": "cubic_in",
    "class": "DistancePanoramaCameraMovement"
   },
   {
    "yawDelta": 323,
    "yawSpeed": 7.96,
    "easing": "linear",
    "class": "DistancePanoramaCameraMovement"
   },
   {
    "yawDelta": 18.5,
    "yawSpeed": 7.96,
    "easing": "cubic_out",
    "class": "DistancePanoramaCameraMovement"
   }
  ],
  "class": "PanoramaCameraSequence"
 }
},
{
 "hfovMax": 130,
 "adjacentPanoramas": [
  {
   "class": "AdjacentPanorama",
   "panorama": "this.panorama_5FE2FE4F_559B_FC2C_41A4_BE2E6B3732EE"
  }
 ],
 "hfovMin": "150%",
 "frames": [
  {
   "stereoCube": {
    "class": "ImageResource",
    "levels": [
     {
      "url": "media/panorama_5FE12600_559B_EC14_41D4_D4C725CB8C27_0/0/{row}_{column}.jpg",
      "rowCount": 3,
      "class": "TiledImageResourceLevel",
      "tags": "ondemand",
      "width": 18432,
      "colCount": 36,
      "height": 1536
     },
     {
      "url": "media/panorama_5FE12600_559B_EC14_41D4_D4C725CB8C27_0/1/{row}_{column}.jpg",
      "rowCount": 2,
      "class": "TiledImageResourceLevel",
      "tags": "ondemand",
      "width": 12288,
      "colCount": 24,
      "height": 1024
     },
     {
      "url": "media/panorama_5FE12600_559B_EC14_41D4_D4C725CB8C27_0/2/{row}_{column}.jpg",
      "rowCount": 1,
      "class": "TiledImageResourceLevel",
      "tags": [
       "ondemand",
       "preload"
      ],
      "width": 6144,
      "colCount": 12,
      "height": 512
     }
    ]
   },
   "class": "CubicPanoramaFrame",
   "thumbnailUrl": "media/panorama_5FE12600_559B_EC14_41D4_D4C725CB8C27_t.jpg"
  }
 ],
 "vfov": 180,
 "hfov": 360,
 "label": "bath1",
 "id": "panorama_5FE12600_559B_EC14_41D4_D4C725CB8C27",
 "thumbnailUrl": "media/panorama_5FE12600_559B_EC14_41D4_D4C725CB8C27_t.jpg",
 "partial": false,
 "class": "Panorama",
 "pitch": 0,
 "overlays": [
  "this.overlay_47D5A43E_55B9_EC6C_41C7_F980C0FC4173"
 ]
},
{
 "items": [
  {
   "media": "this.panorama_5FE05EA7_559B_DC1C_41CC_82457BE41622",
   "class": "PanoramaPlayListItem",
   "begin": "this.setEndToItemIndex(this.mainPlayList, 0, 1)",
   "player": "this.MainViewerPanoramaPlayer",
   "camera": "this.panorama_5FE05EA7_559B_DC1C_41CC_82457BE41622_camera"
  },
  {
   "media": "this.panorama_5FFE73AF_559A_246D_41BE_6C970F53DC32",
   "class": "PanoramaPlayListItem",
   "begin": "this.setEndToItemIndex(this.mainPlayList, 1, 2)",
   "player": "this.MainViewerPanoramaPlayer",
   "camera": "this.panorama_5FFE73AF_559A_246D_41BE_6C970F53DC32_camera"
  },
  {
   "media": "this.panorama_5FF43B4B_559A_2414_41A8_7B6F9A305344",
   "class": "PanoramaPlayListItem",
   "begin": "this.setEndToItemIndex(this.mainPlayList, 2, 3)",
   "player": "this.MainViewerPanoramaPlayer",
   "camera": "this.panorama_5FF43B4B_559A_2414_41A8_7B6F9A305344_camera"
  },
  {
   "media": "this.panorama_5FF0D766_559A_2C1F_41AB_512BD6518694",
   "class": "PanoramaPlayListItem",
   "begin": "this.setEndToItemIndex(this.mainPlayList, 3, 4)",
   "player": "this.MainViewerPanoramaPlayer",
   "camera": "this.panorama_5FF0D766_559A_2C1F_41AB_512BD6518694_camera"
  },
  {
   "media": "this.panorama_5FE2FE4F_559B_FC2C_41A4_BE2E6B3732EE",
   "class": "PanoramaPlayListItem",
   "begin": "this.setEndToItemIndex(this.mainPlayList, 4, 5)",
   "player": "this.MainViewerPanoramaPlayer",
   "camera": "this.panorama_5FE2FE4F_559B_FC2C_41A4_BE2E6B3732EE_camera"
  },
  {
   "media": "this.panorama_5FEFC24C_559B_E42C_41CF_0F1C7C7C96B3",
   "class": "PanoramaPlayListItem",
   "begin": "this.setEndToItemIndex(this.mainPlayList, 5, 6)",
   "player": "this.MainViewerPanoramaPlayer",
   "camera": "this.panorama_5FEFC24C_559B_E42C_41CF_0F1C7C7C96B3_camera"
  },
  {
   "media": "this.panorama_5FE12600_559B_EC14_41D4_D4C725CB8C27",
   "class": "PanoramaPlayListItem",
   "begin": "this.setEndToItemIndex(this.mainPlayList, 6, 7)",
   "player": "this.MainViewerPanoramaPlayer",
   "camera": "this.panorama_5FE12600_559B_EC14_41D4_D4C725CB8C27_camera"
  },
  {
   "media": "this.panorama_5FEE165D_559B_EC2D_41C4_63B135524787",
   "class": "PanoramaPlayListItem",
   "begin": "this.setEndToItemIndex(this.mainPlayList, 7, 8)",
   "player": "this.MainViewerPanoramaPlayer",
   "camera": "this.panorama_5FEE165D_559B_EC2D_41C4_63B135524787_camera"
  },
  {
   "media": "this.panorama_5F183A9A_559B_E437_419D_074434E00356",
   "class": "PanoramaPlayListItem",
   "begin": "this.setEndToItemIndex(this.mainPlayList, 8, 9)",
   "player": "this.MainViewerPanoramaPlayer",
   "camera": "this.panorama_5F183A9A_559B_E437_419D_074434E00356_camera"
  },
  {
   "media": "this.panorama_5FA20A5E_559B_E42C_41C0_6982281411A6",
   "class": "PanoramaPlayListItem",
   "begin": "this.setEndToItemIndex(this.mainPlayList, 9, 10)",
   "player": "this.MainViewerPanoramaPlayer",
   "camera": "this.panorama_5FA20A5E_559B_E42C_41C0_6982281411A6_camera"
  },
  {
   "media": "this.panorama_5FE3FFC1_559A_3C14_41B6_9D6FB711FAE1",
   "class": "PanoramaPlayListItem",
   "begin": "this.setEndToItemIndex(this.mainPlayList, 10, 11)",
   "player": "this.MainViewerPanoramaPlayer",
   "camera": "this.panorama_5FE3FFC1_559A_3C14_41B6_9D6FB711FAE1_camera"
  },
  {
   "media": "this.panorama_5F0C14DA_559A_2C34_41D1_B39A1CA2ED2D",
   "class": "PanoramaPlayListItem",
   "begin": "this.setEndToItemIndex(this.mainPlayList, 11, 12)",
   "player": "this.MainViewerPanoramaPlayer",
   "camera": "this.panorama_5F0C14DA_559A_2C34_41D1_B39A1CA2ED2D_camera"
  },
  {
   "media": "this.panorama_5F002981_559A_2414_41B3_6BC2B132EDF2",
   "camera": "this.panorama_5F002981_559A_2414_41B3_6BC2B132EDF2_camera",
   "class": "PanoramaPlayListItem",
   "begin": "this.setEndToItemIndex(this.mainPlayList, 12, 0)",
   "player": "this.MainViewerPanoramaPlayer",
   "end": "this.trigger('tourEnded')"
  }
 ],
 "id": "mainPlayList",
 "class": "PlayList"
},
{
 "items": [
  {
   "media": "this.panorama_5FE05EA7_559B_DC1C_41CC_82457BE41622",
   "class": "PanoramaPlayListItem",
   "begin": "this.setEndToItemIndex(this.ThumbnailList_519315CD_5D2D_5665_41C2_83700ED94704_playlist, 0, 1)",
   "player": "this.MainViewerPanoramaPlayer",
   "camera": "this.panorama_5FE05EA7_559B_DC1C_41CC_82457BE41622_camera"
  },
  {
   "media": "this.panorama_5FFE73AF_559A_246D_41BE_6C970F53DC32",
   "class": "PanoramaPlayListItem",
   "begin": "this.setEndToItemIndex(this.ThumbnailList_519315CD_5D2D_5665_41C2_83700ED94704_playlist, 1, 2)",
   "player": "this.MainViewerPanoramaPlayer",
   "camera": "this.panorama_5FFE73AF_559A_246D_41BE_6C970F53DC32_camera"
  },
  {
   "media": "this.panorama_5FF43B4B_559A_2414_41A8_7B6F9A305344",
   "class": "PanoramaPlayListItem",
   "begin": "this.setEndToItemIndex(this.ThumbnailList_519315CD_5D2D_5665_41C2_83700ED94704_playlist, 2, 3)",
   "player": "this.MainViewerPanoramaPlayer",
   "camera": "this.panorama_5FF43B4B_559A_2414_41A8_7B6F9A305344_camera"
  },
  {
   "media": "this.panorama_5FF0D766_559A_2C1F_41AB_512BD6518694",
   "class": "PanoramaPlayListItem",
   "begin": "this.setEndToItemIndex(this.ThumbnailList_519315CD_5D2D_5665_41C2_83700ED94704_playlist, 3, 4)",
   "player": "this.MainViewerPanoramaPlayer",
   "camera": "this.panorama_5FF0D766_559A_2C1F_41AB_512BD6518694_camera"
  },
  {
   "media": "this.panorama_5FE2FE4F_559B_FC2C_41A4_BE2E6B3732EE",
   "class": "PanoramaPlayListItem",
   "begin": "this.setEndToItemIndex(this.ThumbnailList_519315CD_5D2D_5665_41C2_83700ED94704_playlist, 4, 5)",
   "player": "this.MainViewerPanoramaPlayer",
   "camera": "this.panorama_5FE2FE4F_559B_FC2C_41A4_BE2E6B3732EE_camera"
  },
  {
   "media": "this.panorama_5FEFC24C_559B_E42C_41CF_0F1C7C7C96B3",
   "class": "PanoramaPlayListItem",
   "begin": "this.setEndToItemIndex(this.ThumbnailList_519315CD_5D2D_5665_41C2_83700ED94704_playlist, 5, 6)",
   "player": "this.MainViewerPanoramaPlayer",
   "camera": "this.panorama_5FEFC24C_559B_E42C_41CF_0F1C7C7C96B3_camera"
  },
  {
   "media": "this.panorama_5FE12600_559B_EC14_41D4_D4C725CB8C27",
   "class": "PanoramaPlayListItem",
   "begin": "this.setEndToItemIndex(this.ThumbnailList_519315CD_5D2D_5665_41C2_83700ED94704_playlist, 6, 7)",
   "player": "this.MainViewerPanoramaPlayer",
   "camera": "this.panorama_5FE12600_559B_EC14_41D4_D4C725CB8C27_camera"
  },
  {
   "media": "this.panorama_5FEE165D_559B_EC2D_41C4_63B135524787",
   "class": "PanoramaPlayListItem",
   "begin": "this.setEndToItemIndex(this.ThumbnailList_519315CD_5D2D_5665_41C2_83700ED94704_playlist, 7, 8)",
   "player": "this.MainViewerPanoramaPlayer",
   "camera": "this.panorama_5FEE165D_559B_EC2D_41C4_63B135524787_camera"
  },
  {
   "media": "this.panorama_5F183A9A_559B_E437_419D_074434E00356",
   "class": "PanoramaPlayListItem",
   "begin": "this.setEndToItemIndex(this.ThumbnailList_519315CD_5D2D_5665_41C2_83700ED94704_playlist, 8, 9)",
   "player": "this.MainViewerPanoramaPlayer",
   "camera": "this.panorama_5F183A9A_559B_E437_419D_074434E00356_camera"
  },
  {
   "media": "this.panorama_5FA20A5E_559B_E42C_41C0_6982281411A6",
   "class": "PanoramaPlayListItem",
   "begin": "this.setEndToItemIndex(this.ThumbnailList_519315CD_5D2D_5665_41C2_83700ED94704_playlist, 9, 10)",
   "player": "this.MainViewerPanoramaPlayer",
   "camera": "this.panorama_5FA20A5E_559B_E42C_41C0_6982281411A6_camera"
  },
  {
   "media": "this.panorama_5FE3FFC1_559A_3C14_41B6_9D6FB711FAE1",
   "class": "PanoramaPlayListItem",
   "begin": "this.setEndToItemIndex(this.ThumbnailList_519315CD_5D2D_5665_41C2_83700ED94704_playlist, 10, 11)",
   "player": "this.MainViewerPanoramaPlayer",
   "camera": "this.panorama_5FE3FFC1_559A_3C14_41B6_9D6FB711FAE1_camera"
  },
  {
   "media": "this.panorama_5F0C14DA_559A_2C34_41D1_B39A1CA2ED2D",
   "class": "PanoramaPlayListItem",
   "begin": "this.setEndToItemIndex(this.ThumbnailList_519315CD_5D2D_5665_41C2_83700ED94704_playlist, 11, 12)",
   "player": "this.MainViewerPanoramaPlayer",
   "camera": "this.panorama_5F0C14DA_559A_2C34_41D1_B39A1CA2ED2D_camera"
  },
  {
   "media": "this.panorama_5F002981_559A_2414_41B3_6BC2B132EDF2",
   "class": "PanoramaPlayListItem",
   "begin": "this.setEndToItemIndex(this.ThumbnailList_519315CD_5D2D_5665_41C2_83700ED94704_playlist, 12, 0)",
   "player": "this.MainViewerPanoramaPlayer",
   "camera": "this.panorama_5F002981_559A_2414_41B3_6BC2B132EDF2_camera"
  }
 ],
 "id": "ThumbnailList_519315CD_5D2D_5665_41C2_83700ED94704_playlist",
 "class": "PlayList"
},
{
 "automaticZoomSpeed": 10,
 "class": "PanoramaCamera",
 "initialPosition": {
  "yaw": 0,
  "class": "PanoramaCameraPosition",
  "pitch": 0
 },
 "id": "panorama_5FFE73AF_559A_246D_41BE_6C970F53DC32_camera",
 "initialSequence": {
  "restartMovementOnUserInteraction": false,
  "movements": [
   {
    "yawDelta": 18.5,
    "yawSpeed": 7.96,
    "easing": "cubic_in",
    "class": "DistancePanoramaCameraMovement"
   },
   {
    "yawDelta": 323,
    "yawSpeed": 7.96,
    "easing": "linear",
    "class": "DistancePanoramaCameraMovement"
   },
   {
    "yawDelta": 18.5,
    "yawSpeed": 7.96,
    "easing": "cubic_out",
    "class": "DistancePanoramaCameraMovement"
   }
  ],
  "class": "PanoramaCameraSequence"
 }
},
{
 "hfovMax": 130,
 "adjacentPanoramas": [
  {
   "class": "AdjacentPanorama",
   "panorama": "this.panorama_5F002981_559A_2414_41B3_6BC2B132EDF2"
  },
  {
   "class": "AdjacentPanorama",
   "panorama": "this.panorama_5FFE73AF_559A_246D_41BE_6C970F53DC32"
  }
 ],
 "hfovMin": "150%",
 "frames": [
  {
   "stereoCube": {
    "class": "ImageResource",
    "levels": [
     {
      "url": "media/panorama_5FF0D766_559A_2C1F_41AB_512BD6518694_0/0/{row}_{column}.jpg",
      "rowCount": 3,
      "class": "TiledImageResourceLevel",
      "tags": "ondemand",
      "width": 18432,
      "colCount": 36,
      "height": 1536
     },
     {
      "url": "media/panorama_5FF0D766_559A_2C1F_41AB_512BD6518694_0/1/{row}_{column}.jpg",
      "rowCount": 2,
      "class": "TiledImageResourceLevel",
      "tags": "ondemand",
      "width": 12288,
      "colCount": 24,
      "height": 1024
     },
     {
      "url": "media/panorama_5FF0D766_559A_2C1F_41AB_512BD6518694_0/2/{row}_{column}.jpg",
      "rowCount": 1,
      "class": "TiledImageResourceLevel",
      "tags": [
       "ondemand",
       "preload"
      ],
      "width": 6144,
      "colCount": 12,
      "height": 512
     }
    ]
   },
   "class": "CubicPanoramaFrame",
   "thumbnailUrl": "media/panorama_5FF0D766_559A_2C1F_41AB_512BD6518694_t.jpg"
  }
 ],
 "vfov": 180,
 "hfov": 360,
 "label": "Living",
 "id": "panorama_5FF0D766_559A_2C1F_41AB_512BD6518694",
 "thumbnailUrl": "media/panorama_5FF0D766_559A_2C1F_41AB_512BD6518694_t.jpg",
 "partial": false,
 "class": "Panorama",
 "pitch": 0,
 "overlays": [
  "this.overlay_456FC93F_55AA_246C_41B0_3BD8C9263356",
  "this.overlay_4493813D_55AE_646C_419B_615A59E08D1F"
 ]
},
{
 "automaticZoomSpeed": 10,
 "class": "PanoramaCamera",
 "initialPosition": {
  "yaw": 0,
  "class": "PanoramaCameraPosition",
  "pitch": 0
 },
 "id": "panorama_5FF0D766_559A_2C1F_41AB_512BD6518694_camera",
 "initialSequence": {
  "restartMovementOnUserInteraction": false,
  "movements": [
   {
    "yawDelta": 18.5,
    "yawSpeed": 7.96,
    "easing": "cubic_in",
    "class": "DistancePanoramaCameraMovement"
   },
   {
    "yawDelta": 323,
    "yawSpeed": 7.96,
    "easing": "linear",
    "class": "DistancePanoramaCameraMovement"
   },
   {
    "yawDelta": 18.5,
    "yawSpeed": 7.96,
    "easing": "cubic_out",
    "class": "DistancePanoramaCameraMovement"
   }
  ],
  "class": "PanoramaCameraSequence"
 }
},
{
 "automaticZoomSpeed": 10,
 "class": "PanoramaCamera",
 "initialPosition": {
  "yaw": 0,
  "class": "PanoramaCameraPosition",
  "pitch": 0
 },
 "id": "panorama_5FE12600_559B_EC14_41D4_D4C725CB8C27_camera",
 "initialSequence": {
  "restartMovementOnUserInteraction": false,
  "movements": [
   {
    "yawDelta": 18.5,
    "yawSpeed": 7.96,
    "easing": "cubic_in",
    "class": "DistancePanoramaCameraMovement"
   },
   {
    "yawDelta": 323,
    "yawSpeed": 7.96,
    "easing": "linear",
    "class": "DistancePanoramaCameraMovement"
   },
   {
    "yawDelta": 18.5,
    "yawSpeed": 7.96,
    "easing": "cubic_out",
    "class": "DistancePanoramaCameraMovement"
   }
  ],
  "class": "PanoramaCameraSequence"
 }
},
{
 "hfovMax": 130,
 "adjacentPanoramas": [
  {
   "class": "AdjacentPanorama",
   "panorama": "this.panorama_5FEE165D_559B_EC2D_41C4_63B135524787"
  },
  {
   "class": "AdjacentPanorama",
   "panorama": "this.panorama_5FA20A5E_559B_E42C_41C0_6982281411A6"
  },
  {
   "class": "AdjacentPanorama",
   "panorama": "this.panorama_5FF43B4B_559A_2414_41A8_7B6F9A305344"
  }
 ],
 "hfovMin": "150%",
 "frames": [
  {
   "stereoCube": {
    "class": "ImageResource",
    "levels": [
     {
      "url": "media/panorama_5F183A9A_559B_E437_419D_074434E00356_0/0/{row}_{column}.jpg",
      "rowCount": 3,
      "class": "TiledImageResourceLevel",
      "tags": "ondemand",
      "width": 18432,
      "colCount": 36,
      "height": 1536
     },
     {
      "url": "media/panorama_5F183A9A_559B_E437_419D_074434E00356_0/1/{row}_{column}.jpg",
      "rowCount": 2,
      "class": "TiledImageResourceLevel",
      "tags": "ondemand",
      "width": 12288,
      "colCount": 24,
      "height": 1024
     },
     {
      "url": "media/panorama_5F183A9A_559B_E437_419D_074434E00356_0/2/{row}_{column}.jpg",
      "rowCount": 1,
      "class": "TiledImageResourceLevel",
      "tags": [
       "ondemand",
       "preload"
      ],
      "width": 6144,
      "colCount": 12,
      "height": 512
     }
    ]
   },
   "class": "CubicPanoramaFrame",
   "thumbnailUrl": "media/panorama_5F183A9A_559B_E437_419D_074434E00356_t.jpg"
  }
 ],
 "vfov": 180,
 "hfov": 360,
 "label": "bed2-1",
 "id": "panorama_5F183A9A_559B_E437_419D_074434E00356",
 "thumbnailUrl": "media/panorama_5F183A9A_559B_E437_419D_074434E00356_t.jpg",
 "partial": false,
 "class": "Panorama",
 "pitch": 0,
 "overlays": [
  "this.overlay_41CA7B3B_55BA_2474_41C3_F07B138E10F5",
  "this.overlay_416C8A64_55BA_241C_41C8_110782240944",
  "this.overlay_40807745_55BA_6C1C_41CD_622086FAA163"
 ]
},
{
 "automaticZoomSpeed": 10,
 "class": "PanoramaCamera",
 "initialPosition": {
  "yaw": 0,
  "class": "PanoramaCameraPosition",
  "pitch": 0
 },
 "id": "panorama_5F183A9A_559B_E437_419D_074434E00356_camera",
 "initialSequence": {
  "restartMovementOnUserInteraction": false,
  "movements": [
   {
    "yawDelta": 18.5,
    "yawSpeed": 7.96,
    "easing": "cubic_in",
    "class": "DistancePanoramaCameraMovement"
   },
   {
    "yawDelta": 323,
    "yawSpeed": 7.96,
    "easing": "linear",
    "class": "DistancePanoramaCameraMovement"
   },
   {
    "yawDelta": 18.5,
    "yawSpeed": 7.96,
    "easing": "cubic_out",
    "class": "DistancePanoramaCameraMovement"
   }
  ],
  "class": "PanoramaCameraSequence"
 }
},
{
 "viewerArea": "this.MainViewer",
 "displayPlaybackBar": true,
 "class": "PanoramaPlayer",
 "gyroscopeVerticalDraggingEnabled": true,
 "buttonToggleGyroscope": "this.IconButton_532E320B_5D2D_2DED_41C2_0771F0A3CFDB",
 "touchControlMode": "drag_rotation",
 "id": "MainViewerPanoramaPlayer",
 "buttonToggleHotspots": "this.IconButton_532E520B_5D2D_2DED_41D4_B703E0AAEDE8",
 "buttonCardboardView": "this.IconButton_532E020B_5D2D_2DED_41D3_4EC3326FFF7E",
 "mouseControlMode": "drag_acceleration"
},
{
 "hfovMax": 130,
 "adjacentPanoramas": [
  {
   "class": "AdjacentPanorama",
   "panorama": "this.panorama_5FF0D766_559A_2C1F_41AB_512BD6518694"
  },
  {
   "class": "AdjacentPanorama",
   "panorama": "this.panorama_5FE05EA7_559B_DC1C_41CC_82457BE41622"
  },
  {
   "class": "AdjacentPanorama",
   "panorama": "this.panorama_5FF43B4B_559A_2414_41A8_7B6F9A305344"
  }
 ],
 "hfovMin": "150%",
 "frames": [
  {
   "stereoCube": {
    "class": "ImageResource",
    "levels": [
     {
      "url": "media/panorama_5FFE73AF_559A_246D_41BE_6C970F53DC32_0/0/{row}_{column}.jpg",
      "rowCount": 3,
      "class": "TiledImageResourceLevel",
      "tags": "ondemand",
      "width": 18432,
      "colCount": 36,
      "height": 1536
     },
     {
      "url": "media/panorama_5FFE73AF_559A_246D_41BE_6C970F53DC32_0/1/{row}_{column}.jpg",
      "rowCount": 2,
      "class": "TiledImageResourceLevel",
      "tags": "ondemand",
      "width": 12288,
      "colCount": 24,
      "height": 1024
     },
     {
      "url": "media/panorama_5FFE73AF_559A_246D_41BE_6C970F53DC32_0/2/{row}_{column}.jpg",
      "rowCount": 1,
      "class": "TiledImageResourceLevel",
      "tags": [
       "ondemand",
       "preload"
      ],
      "width": 6144,
      "colCount": 12,
      "height": 512
     }
    ]
   },
   "class": "CubicPanoramaFrame",
   "thumbnailUrl": "media/panorama_5FFE73AF_559A_246D_41BE_6C970F53DC32_t.jpg"
  }
 ],
 "vfov": 180,
 "hfov": 360,
 "label": "Kitchen",
 "id": "panorama_5FFE73AF_559A_246D_41BE_6C970F53DC32",
 "thumbnailUrl": "media/panorama_5FFE73AF_559A_246D_41BE_6C970F53DC32_t.jpg",
 "partial": false,
 "class": "Panorama",
 "pitch": 0,
 "overlays": [
  "this.overlay_5BCE7AD5_55A6_E43C_41C3_967DB5FD479A",
  "this.overlay_5B2304CF_55A6_2C2C_41A3_E7DE364B26D2",
  "this.overlay_5ACC35DC_55A6_6C33_41C6_B08B72828ACE"
 ]
},
{
 "hfovMax": 130,
 "adjacentPanoramas": [
  {
   "class": "AdjacentPanorama",
   "panorama": "this.panorama_5FF0D766_559A_2C1F_41AB_512BD6518694"
  },
  {
   "class": "AdjacentPanorama",
   "panorama": "this.panorama_5FFE73AF_559A_246D_41BE_6C970F53DC32"
  }
 ],
 "hfovMin": "150%",
 "frames": [
  {
   "stereoCube": {
    "class": "ImageResource",
    "levels": [
     {
      "url": "media/panorama_5FE05EA7_559B_DC1C_41CC_82457BE41622_0/0/{row}_{column}.jpg",
      "rowCount": 3,
      "class": "TiledImageResourceLevel",
      "tags": "ondemand",
      "width": 18432,
      "colCount": 36,
      "height": 1536
     },
     {
      "url": "media/panorama_5FE05EA7_559B_DC1C_41CC_82457BE41622_0/1/{row}_{column}.jpg",
      "rowCount": 2,
      "class": "TiledImageResourceLevel",
      "tags": "ondemand",
      "width": 12288,
      "colCount": 24,
      "height": 1024
     },
     {
      "url": "media/panorama_5FE05EA7_559B_DC1C_41CC_82457BE41622_0/2/{row}_{column}.jpg",
      "rowCount": 1,
      "class": "TiledImageResourceLevel",
      "tags": [
       "ondemand",
       "preload"
      ],
      "width": 6144,
      "colCount": 12,
      "height": 512
     }
    ]
   },
   "class": "CubicPanoramaFrame",
   "thumbnailUrl": "media/panorama_5FE05EA7_559B_DC1C_41CC_82457BE41622_t.jpg"
  }
 ],
 "vfov": 180,
 "hfov": 360,
 "label": "entrance",
 "id": "panorama_5FE05EA7_559B_DC1C_41CC_82457BE41622",
 "thumbnailUrl": "media/panorama_5FE05EA7_559B_DC1C_41CC_82457BE41622_t.jpg",
 "partial": false,
 "class": "Panorama",
 "pitch": 0,
 "overlays": [
  "this.overlay_5898665C_559E_EC2C_41AC_DAF26182BFB3",
  "this.overlay_5B85F0E2_559E_2414_41D4_A59F9DD58A1A"
 ]
},
{
 "hfovMax": 130,
 "adjacentPanoramas": [
  {
   "class": "AdjacentPanorama",
   "panorama": "this.panorama_5FEFC24C_559B_E42C_41CF_0F1C7C7C96B3"
  },
  {
   "class": "AdjacentPanorama",
   "panorama": "this.panorama_5FEE165D_559B_EC2D_41C4_63B135524787"
  },
  {
   "class": "AdjacentPanorama",
   "panorama": "this.panorama_5F0C14DA_559A_2C34_41D1_B39A1CA2ED2D"
  },
  {
   "class": "AdjacentPanorama",
   "panorama": "this.panorama_5F002981_559A_2414_41B3_6BC2B132EDF2"
  }
 ],
 "hfovMin": "150%",
 "frames": [
  {
   "stereoCube": {
    "class": "ImageResource",
    "levels": [
     {
      "url": "media/panorama_5FE3FFC1_559A_3C14_41B6_9D6FB711FAE1_0/0/{row}_{column}.jpg",
      "rowCount": 3,
      "class": "TiledImageResourceLevel",
      "tags": "ondemand",
      "width": 18432,
      "colCount": 36,
      "height": 1536
     },
     {
      "url": "media/panorama_5FE3FFC1_559A_3C14_41B6_9D6FB711FAE1_0/1/{row}_{column}.jpg",
      "rowCount": 2,
      "class": "TiledImageResourceLevel",
      "tags": "ondemand",
      "width": 12288,
      "colCount": 24,
      "height": 1024
     },
     {
      "url": "media/panorama_5FE3FFC1_559A_3C14_41B6_9D6FB711FAE1_0/2/{row}_{column}.jpg",
      "rowCount": 1,
      "class": "TiledImageResourceLevel",
      "tags": [
       "ondemand",
       "preload"
      ],
      "width": 6144,
      "colCount": 12,
      "height": 512
     }
    ]
   },
   "class": "CubicPanoramaFrame",
   "thumbnailUrl": "media/panorama_5FE3FFC1_559A_3C14_41B6_9D6FB711FAE1_t.jpg"
  }
 ],
 "vfov": 180,
 "hfov": 360,
 "label": "pool1",
 "id": "panorama_5FE3FFC1_559A_3C14_41B6_9D6FB711FAE1",
 "thumbnailUrl": "media/panorama_5FE3FFC1_559A_3C14_41B6_9D6FB711FAE1_t.jpg",
 "partial": false,
 "class": "Panorama",
 "pitch": 0,
 "overlays": [
  "this.overlay_40C975E8_55A6_2C14_41C7_CA1433A8F5FC",
  "this.overlay_43153C00_55A7_DC14_41C8_819805E12BAC",
  "this.overlay_40C95194_55A6_243C_41CF_E796D7BB1FCC",
  "this.overlay_40DE44EF_55A6_2DEC_41A6_2F25C9DCBC80"
 ]
},
{
 "automaticZoomSpeed": 10,
 "class": "PanoramaCamera",
 "initialPosition": {
  "yaw": 0,
  "class": "PanoramaCameraPosition",
  "pitch": 0
 },
 "id": "panorama_5F0C14DA_559A_2C34_41D1_B39A1CA2ED2D_camera",
 "initialSequence": {
  "restartMovementOnUserInteraction": false,
  "movements": [
   {
    "yawDelta": 18.5,
    "yawSpeed": 7.96,
    "easing": "cubic_in",
    "class": "DistancePanoramaCameraMovement"
   },
   {
    "yawDelta": 323,
    "yawSpeed": 7.96,
    "easing": "linear",
    "class": "DistancePanoramaCameraMovement"
   },
   {
    "yawDelta": 18.5,
    "yawSpeed": 7.96,
    "easing": "cubic_out",
    "class": "DistancePanoramaCameraMovement"
   }
  ],
  "class": "PanoramaCameraSequence"
 }
},
{
 "hfovMax": 130,
 "adjacentPanoramas": [
  {
   "class": "AdjacentPanorama",
   "panorama": "this.panorama_5FEFC24C_559B_E42C_41CF_0F1C7C7C96B3"
  },
  {
   "class": "AdjacentPanorama",
   "panorama": "this.panorama_5FEE165D_559B_EC2D_41C4_63B135524787"
  },
  {
   "class": "AdjacentPanorama",
   "panorama": "this.panorama_5FFE73AF_559A_246D_41BE_6C970F53DC32"
  }
 ],
 "hfovMin": "150%",
 "frames": [
  {
   "stereoCube": {
    "class": "ImageResource",
    "levels": [
     {
      "url": "media/panorama_5FF43B4B_559A_2414_41A8_7B6F9A305344_0/0/{row}_{column}.jpg",
      "rowCount": 3,
      "class": "TiledImageResourceLevel",
      "tags": "ondemand",
      "width": 18432,
      "colCount": 36,
      "height": 1536
     },
     {
      "url": "media/panorama_5FF43B4B_559A_2414_41A8_7B6F9A305344_0/1/{row}_{column}.jpg",
      "rowCount": 2,
      "class": "TiledImageResourceLevel",
      "tags": "ondemand",
      "width": 12288,
      "colCount": 24,
      "height": 1024
     },
     {
      "url": "media/panorama_5FF43B4B_559A_2414_41A8_7B6F9A305344_0/2/{row}_{column}.jpg",
      "rowCount": 1,
      "class": "TiledImageResourceLevel",
      "tags": [
       "ondemand",
       "preload"
      ],
      "width": 6144,
      "colCount": 12,
      "height": 512
     }
    ]
   },
   "class": "CubicPanoramaFrame",
   "thumbnailUrl": "media/panorama_5FF43B4B_559A_2414_41A8_7B6F9A305344_t.jpg"
  }
 ],
 "vfov": 180,
 "hfov": 360,
 "label": "outside bed",
 "id": "panorama_5FF43B4B_559A_2414_41A8_7B6F9A305344",
 "thumbnailUrl": "media/panorama_5FF43B4B_559A_2414_41A8_7B6F9A305344_t.jpg",
 "partial": false,
 "class": "Panorama",
 "pitch": 0,
 "overlays": [
  "this.overlay_45EDCFF4_55A6_3BFC_41C8_6E598B5FFE2A",
  "this.overlay_45BE240F_55AA_EC2C_41AF_6F283C5A44D5",
  "this.overlay_5A417F83_55AB_FC14_41B3_35FDBAD5652B"
 ]
},
{
 "automaticZoomSpeed": 10,
 "class": "PanoramaCamera",
 "initialPosition": {
  "yaw": 0,
  "class": "PanoramaCameraPosition",
  "pitch": 0
 },
 "id": "panorama_5FEE165D_559B_EC2D_41C4_63B135524787_camera",
 "initialSequence": {
  "restartMovementOnUserInteraction": false,
  "movements": [
   {
    "yawDelta": 18.5,
    "yawSpeed": 7.96,
    "easing": "cubic_in",
    "class": "DistancePanoramaCameraMovement"
   },
   {
    "yawDelta": 323,
    "yawSpeed": 7.96,
    "easing": "linear",
    "class": "DistancePanoramaCameraMovement"
   },
   {
    "yawDelta": 18.5,
    "yawSpeed": 7.96,
    "easing": "cubic_out",
    "class": "DistancePanoramaCameraMovement"
   }
  ],
  "class": "PanoramaCameraSequence"
 }
},
{
 "automaticZoomSpeed": 10,
 "class": "PanoramaCamera",
 "initialPosition": {
  "yaw": 0,
  "class": "PanoramaCameraPosition",
  "pitch": 0
 },
 "id": "panorama_5FA20A5E_559B_E42C_41C0_6982281411A6_camera",
 "initialSequence": {
  "restartMovementOnUserInteraction": false,
  "movements": [
   {
    "yawDelta": 18.5,
    "yawSpeed": 7.96,
    "easing": "cubic_in",
    "class": "DistancePanoramaCameraMovement"
   },
   {
    "yawDelta": 323,
    "yawSpeed": 7.96,
    "easing": "linear",
    "class": "DistancePanoramaCameraMovement"
   },
   {
    "yawDelta": 18.5,
    "yawSpeed": 7.96,
    "easing": "cubic_out",
    "class": "DistancePanoramaCameraMovement"
   }
  ],
  "class": "PanoramaCameraSequence"
 }
},
{
 "hfovMax": 130,
 "adjacentPanoramas": [
  {
   "class": "AdjacentPanorama",
   "panorama": "this.panorama_5FEE165D_559B_EC2D_41C4_63B135524787"
  },
  {
   "class": "AdjacentPanorama",
   "panorama": "this.panorama_5F183A9A_559B_E437_419D_074434E00356"
  }
 ],
 "hfovMin": "150%",
 "frames": [
  {
   "stereoCube": {
    "class": "ImageResource",
    "levels": [
     {
      "url": "media/panorama_5FA20A5E_559B_E42C_41C0_6982281411A6_0/0/{row}_{column}.jpg",
      "rowCount": 3,
      "class": "TiledImageResourceLevel",
      "tags": "ondemand",
      "width": 18432,
      "colCount": 36,
      "height": 1536
     },
     {
      "url": "media/panorama_5FA20A5E_559B_E42C_41C0_6982281411A6_0/1/{row}_{column}.jpg",
      "rowCount": 2,
      "class": "TiledImageResourceLevel",
      "tags": "ondemand",
      "width": 12288,
      "colCount": 24,
      "height": 1024
     },
     {
      "url": "media/panorama_5FA20A5E_559B_E42C_41C0_6982281411A6_0/2/{row}_{column}.jpg",
      "rowCount": 1,
      "class": "TiledImageResourceLevel",
      "tags": [
       "ondemand",
       "preload"
      ],
      "width": 6144,
      "colCount": 12,
      "height": 512
     }
    ]
   },
   "class": "CubicPanoramaFrame",
   "thumbnailUrl": "media/panorama_5FA20A5E_559B_E42C_41C0_6982281411A6_t.jpg"
  }
 ],
 "vfov": 180,
 "hfov": 360,
 "label": "bath2",
 "id": "panorama_5FA20A5E_559B_E42C_41C0_6982281411A6",
 "thumbnailUrl": "media/panorama_5FA20A5E_559B_E42C_41C0_6982281411A6_t.jpg",
 "partial": false,
 "class": "Panorama",
 "pitch": 0,
 "overlays": [
  "this.overlay_408A0685_55BA_6C1C_41CF_1F3C0F525314",
  "this.overlay_41DF6957_55A6_243C_41D2_7885601A2203"
 ]
},
{
 "automaticZoomSpeed": 10,
 "class": "PanoramaCamera",
 "initialPosition": {
  "yaw": 0,
  "class": "PanoramaCameraPosition",
  "pitch": 0
 },
 "id": "panorama_5FF43B4B_559A_2414_41A8_7B6F9A305344_camera",
 "initialSequence": {
  "restartMovementOnUserInteraction": false,
  "movements": [
   {
    "yawDelta": 18.5,
    "yawSpeed": 7.96,
    "easing": "cubic_in",
    "class": "DistancePanoramaCameraMovement"
   },
   {
    "yawDelta": 323,
    "yawSpeed": 7.96,
    "easing": "linear",
    "class": "DistancePanoramaCameraMovement"
   },
   {
    "yawDelta": 18.5,
    "yawSpeed": 7.96,
    "easing": "cubic_out",
    "class": "DistancePanoramaCameraMovement"
   }
  ],
  "class": "PanoramaCameraSequence"
 }
},
{
 "hfovMax": 130,
 "adjacentPanoramas": [
  {
   "class": "AdjacentPanorama",
   "panorama": "this.panorama_5F0C14DA_559A_2C34_41D1_B39A1CA2ED2D"
  },
  {
   "class": "AdjacentPanorama",
   "panorama": "this.panorama_5FE2FE4F_559B_FC2C_41A4_BE2E6B3732EE"
  }
 ],
 "hfovMin": "150%",
 "frames": [
  {
   "stereoCube": {
    "class": "ImageResource",
    "levels": [
     {
      "url": "media/panorama_5FEFC24C_559B_E42C_41CF_0F1C7C7C96B3_0/0/{row}_{column}.jpg",
      "rowCount": 3,
      "class": "TiledImageResourceLevel",
      "tags": "ondemand",
      "width": 18432,
      "colCount": 36,
      "height": 1536
     },
     {
      "url": "media/panorama_5FEFC24C_559B_E42C_41CF_0F1C7C7C96B3_0/1/{row}_{column}.jpg",
      "rowCount": 2,
      "class": "TiledImageResourceLevel",
      "tags": "ondemand",
      "width": 12288,
      "colCount": 24,
      "height": 1024
     },
     {
      "url": "media/panorama_5FEFC24C_559B_E42C_41CF_0F1C7C7C96B3_0/2/{row}_{column}.jpg",
      "rowCount": 1,
      "class": "TiledImageResourceLevel",
      "tags": [
       "ondemand",
       "preload"
      ],
      "width": 6144,
      "colCount": 12,
      "height": 512
     }
    ]
   },
   "class": "CubicPanoramaFrame",
   "thumbnailUrl": "media/panorama_5FEFC24C_559B_E42C_41CF_0F1C7C7C96B3_t.jpg"
  }
 ],
 "vfov": 180,
 "hfov": 360,
 "label": "bed1-1",
 "id": "panorama_5FEFC24C_559B_E42C_41CF_0F1C7C7C96B3",
 "thumbnailUrl": "media/panorama_5FEFC24C_559B_E42C_41CF_0F1C7C7C96B3_t.jpg",
 "partial": false,
 "class": "Panorama",
 "pitch": 0,
 "overlays": [
  "this.overlay_47A39F55_55BA_5C3C_41BD_B8725B1586F1",
  "this.overlay_478A89F0_55BA_27F4_41A7_1F0E16FCAD42"
 ]
},
{
 "automaticZoomSpeed": 10,
 "class": "PanoramaCamera",
 "initialPosition": {
  "yaw": 0,
  "class": "PanoramaCameraPosition",
  "pitch": 0
 },
 "id": "panorama_5FEFC24C_559B_E42C_41CF_0F1C7C7C96B3_camera",
 "initialSequence": {
  "restartMovementOnUserInteraction": false,
  "movements": [
   {
    "yawDelta": 18.5,
    "yawSpeed": 7.96,
    "easing": "cubic_in",
    "class": "DistancePanoramaCameraMovement"
   },
   {
    "yawDelta": 323,
    "yawSpeed": 7.96,
    "easing": "linear",
    "class": "DistancePanoramaCameraMovement"
   },
   {
    "yawDelta": 18.5,
    "yawSpeed": 7.96,
    "easing": "cubic_out",
    "class": "DistancePanoramaCameraMovement"
   }
  ],
  "class": "PanoramaCameraSequence"
 }
},
{
 "hfovMax": 130,
 "adjacentPanoramas": [
  {
   "class": "AdjacentPanorama",
   "panorama": "this.panorama_5F183A9A_559B_E437_419D_074434E00356"
  },
  {
   "class": "AdjacentPanorama",
   "panorama": "this.panorama_5FA20A5E_559B_E42C_41C0_6982281411A6"
  },
  {
   "class": "AdjacentPanorama",
   "panorama": "this.panorama_5FE3FFC1_559A_3C14_41B6_9D6FB711FAE1"
  }
 ],
 "hfovMin": "150%",
 "frames": [
  {
   "stereoCube": {
    "class": "ImageResource",
    "levels": [
     {
      "url": "media/panorama_5FEE165D_559B_EC2D_41C4_63B135524787_0/0/{row}_{column}.jpg",
      "rowCount": 3,
      "class": "TiledImageResourceLevel",
      "tags": "ondemand",
      "width": 18432,
      "colCount": 36,
      "height": 1536
     },
     {
      "url": "media/panorama_5FEE165D_559B_EC2D_41C4_63B135524787_0/1/{row}_{column}.jpg",
      "rowCount": 2,
      "class": "TiledImageResourceLevel",
      "tags": "ondemand",
      "width": 12288,
      "colCount": 24,
      "height": 1024
     },
     {
      "url": "media/panorama_5FEE165D_559B_EC2D_41C4_63B135524787_0/2/{row}_{column}.jpg",
      "rowCount": 1,
      "class": "TiledImageResourceLevel",
      "tags": [
       "ondemand",
       "preload"
      ],
      "width": 6144,
      "colCount": 12,
      "height": 512
     }
    ]
   },
   "class": "CubicPanoramaFrame",
   "thumbnailUrl": "media/panorama_5FEE165D_559B_EC2D_41C4_63B135524787_t.jpg"
  }
 ],
 "vfov": 180,
 "hfov": 360,
 "label": "bed2",
 "id": "panorama_5FEE165D_559B_EC2D_41C4_63B135524787",
 "thumbnailUrl": "media/panorama_5FEE165D_559B_EC2D_41C4_63B135524787_t.jpg",
 "partial": false,
 "class": "Panorama",
 "pitch": 0,
 "overlays": [
  "this.overlay_47146B47_55BE_641C_41A0_12CE14BB0172",
  "this.overlay_469DFB41_55BE_E414_41B8_B69B5728EAAF",
  "this.overlay_46168637_55BE_2C7C_41D4_A58BB4261F18"
 ]
},
{
 "hfovMax": 130,
 "adjacentPanoramas": [
  {
   "class": "AdjacentPanorama",
   "panorama": "this.panorama_5FEFC24C_559B_E42C_41CF_0F1C7C7C96B3"
  },
  {
   "class": "AdjacentPanorama",
   "panorama": "this.panorama_5FEE165D_559B_EC2D_41C4_63B135524787"
  },
  {
   "class": "AdjacentPanorama",
   "panorama": "this.panorama_5F002981_559A_2414_41B3_6BC2B132EDF2"
  },
  {
   "class": "AdjacentPanorama",
   "panorama": "this.panorama_5FE3FFC1_559A_3C14_41B6_9D6FB711FAE1"
  }
 ],
 "hfovMin": "150%",
 "frames": [
  {
   "stereoCube": {
    "class": "ImageResource",
    "levels": [
     {
      "url": "media/panorama_5F0C14DA_559A_2C34_41D1_B39A1CA2ED2D_0/0/{row}_{column}.jpg",
      "rowCount": 3,
      "class": "TiledImageResourceLevel",
      "tags": "ondemand",
      "width": 18432,
      "colCount": 36,
      "height": 1536
     },
     {
      "url": "media/panorama_5F0C14DA_559A_2C34_41D1_B39A1CA2ED2D_0/1/{row}_{column}.jpg",
      "rowCount": 2,
      "class": "TiledImageResourceLevel",
      "tags": "ondemand",
      "width": 12288,
      "colCount": 24,
      "height": 1024
     },
     {
      "url": "media/panorama_5F0C14DA_559A_2C34_41D1_B39A1CA2ED2D_0/2/{row}_{column}.jpg",
      "rowCount": 1,
      "class": "TiledImageResourceLevel",
      "tags": [
       "ondemand",
       "preload"
      ],
      "width": 6144,
      "colCount": 12,
      "height": 512
     }
    ]
   },
   "class": "CubicPanoramaFrame",
   "thumbnailUrl": "media/panorama_5F0C14DA_559A_2C34_41D1_B39A1CA2ED2D_t.jpg"
  }
 ],
 "vfov": 180,
 "hfov": 360,
 "label": "pool2",
 "id": "panorama_5F0C14DA_559A_2C34_41D1_B39A1CA2ED2D",
 "thumbnailUrl": "media/panorama_5F0C14DA_559A_2C34_41D1_B39A1CA2ED2D_t.jpg",
 "partial": false,
 "class": "Panorama",
 "pitch": 0,
 "overlays": [
  "this.overlay_4145078A_55AA_2C14_41CE_1122298413BA",
  "this.overlay_40DE961C_55AA_2C2C_41C9_C36CBC3F9488",
  "this.overlay_43BD19D0_55AB_E434_41C4_B4A07DD4BCE2",
  "this.overlay_4052189A_55AA_2434_41D4_4A3F62BE4F2C"
 ]
},
{
 "automaticZoomSpeed": 10,
 "class": "PanoramaCamera",
 "initialPosition": {
  "yaw": 0,
  "class": "PanoramaCameraPosition",
  "pitch": 0
 },
 "id": "panorama_5FE3FFC1_559A_3C14_41B6_9D6FB711FAE1_camera",
 "initialSequence": {
  "restartMovementOnUserInteraction": false,
  "movements": [
   {
    "yawDelta": 18.5,
    "yawSpeed": 7.96,
    "easing": "cubic_in",
    "class": "DistancePanoramaCameraMovement"
   },
   {
    "yawDelta": 323,
    "yawSpeed": 7.96,
    "easing": "linear",
    "class": "DistancePanoramaCameraMovement"
   },
   {
    "yawDelta": 18.5,
    "yawSpeed": 7.96,
    "easing": "cubic_out",
    "class": "DistancePanoramaCameraMovement"
   }
  ],
  "class": "PanoramaCameraSequence"
 }
},
{
 "hfovMax": 130,
 "adjacentPanoramas": [
  {
   "class": "AdjacentPanorama",
   "panorama": "this.panorama_5FF0D766_559A_2C1F_41AB_512BD6518694"
  },
  {
   "class": "AdjacentPanorama",
   "panorama": "this.panorama_5FEFC24C_559B_E42C_41CF_0F1C7C7C96B3"
  },
  {
   "class": "AdjacentPanorama",
   "panorama": "this.panorama_5F0C14DA_559A_2C34_41D1_B39A1CA2ED2D"
  },
  {
   "class": "AdjacentPanorama",
   "panorama": "this.panorama_5FEE165D_559B_EC2D_41C4_63B135524787"
  },
  {
   "class": "AdjacentPanorama",
   "panorama": "this.panorama_5FE3FFC1_559A_3C14_41B6_9D6FB711FAE1"
  }
 ],
 "hfovMin": "150%",
 "frames": [
  {
   "stereoCube": {
    "class": "ImageResource",
    "levels": [
     {
      "url": "media/panorama_5F002981_559A_2414_41B3_6BC2B132EDF2_0/0/{row}_{column}.jpg",
      "rowCount": 3,
      "class": "TiledImageResourceLevel",
      "tags": "ondemand",
      "width": 18432,
      "colCount": 36,
      "height": 1536
     },
     {
      "url": "media/panorama_5F002981_559A_2414_41B3_6BC2B132EDF2_0/1/{row}_{column}.jpg",
      "rowCount": 2,
      "class": "TiledImageResourceLevel",
      "tags": "ondemand",
      "width": 12288,
      "colCount": 24,
      "height": 1024
     },
     {
      "url": "media/panorama_5F002981_559A_2414_41B3_6BC2B132EDF2_0/2/{row}_{column}.jpg",
      "rowCount": 1,
      "class": "TiledImageResourceLevel",
      "tags": [
       "ondemand",
       "preload"
      ],
      "width": 6144,
      "colCount": 12,
      "height": 512
     }
    ]
   },
   "class": "CubicPanoramaFrame",
   "thumbnailUrl": "media/panorama_5F002981_559A_2414_41B3_6BC2B132EDF2_t.jpg"
  }
 ],
 "vfov": 180,
 "hfov": 360,
 "label": "pool3",
 "id": "panorama_5F002981_559A_2414_41B3_6BC2B132EDF2",
 "thumbnailUrl": "media/panorama_5F002981_559A_2414_41B3_6BC2B132EDF2_t.jpg",
 "partial": false,
 "class": "Panorama",
 "pitch": 0,
 "overlays": [
  "this.overlay_43432A3A_55AE_2477_41D4_C8FC2FFD495F",
  "this.overlay_4DF126DD_55AE_2C2C_41B4_28A3A167C738",
  "this.overlay_4290728D_55AE_642C_4193_428BD58845D0",
  "this.overlay_42D18B9C_55AE_2433_41D2_08A9B5C60272",
  "this.overlay_42F57151_55AA_2434_4151_3DF00CC63B9A"
 ]
},
{
 "playbackBarHeadOpacity": 1,
 "playbackBarBottom": 5,
 "toolTipShadowSpread": 0,
 "progressBorderColor": "#000000",
 "id": "MainViewer",
 "paddingLeft": 0,
 "progressBarBackgroundColor": [
  "#3399FF"
 ],
 "toolTipBorderColor": "#767676",
 "class": "ViewerArea",
 "progressBackgroundColor": [
  "#FFFFFF"
 ],
 "playbackBarProgressBackgroundColorDirection": "vertical",
 "toolTipOpacity": 1,
 "toolTipFontSize": "1.11vmin",
 "width": "100%",
 "playbackBarBackgroundColor": [
  "#FFFFFF"
 ],
 "minHeight": 50,
 "toolTipShadowBlurRadius": 3,
 "playbackBarHeight": 10,
 "toolTipTextShadowColor": "#000000",
 "playbackBarHeadWidth": 6,
 "playbackBarBackgroundColorDirection": "vertical",
 "toolTipTextShadowBlurRadius": 3,
 "playbackBarRight": 0,
 "toolTipFontWeight": "normal",
 "playbackBarProgressBorderSize": 0,
 "toolTipPaddingBottom": 4,
 "minWidth": 100,
 "progressBarBorderRadius": 0,
 "playbackBarHeadShadowVerticalLength": 0,
 "progressBarBorderSize": 0,
 "toolTipShadowColor": "#333333",
 "playbackBarProgressBorderRadius": 0,
 "playbackBarBorderRadius": 0,
 "height": "100%",
 "playbackBarHeadBorderRadius": 0,
 "playbackBarProgressBorderColor": "#000000",
 "playbackBarHeadBorderColor": "#000000",
 "shadow": false,
 "progressLeft": 0,
 "playbackBarHeadBorderSize": 0,
 "playbackBarProgressOpacity": 1,
 "toolTipShadowOpacity": 1,
 "playbackBarBorderSize": 0,
 "transitionMode": "blending",
 "toolTipShadowHorizontalLength": 0,
 "propagateClick": false,
 "toolTipTextShadowOpacity": 0,
 "toolTipFontStyle": "normal",
 "toolTipFontFamily": "Arial",
 "toolTipShadowVerticalLength": 0,
 "vrPointerSelectionColor": "#FF6600",
 "playbackBarBackgroundOpacity": 1,
 "playbackBarHeadBackgroundColor": [
  "#111111",
  "#666666"
 ],
 "playbackBarHeadShadowColor": "#000000",
 "vrPointerSelectionTime": 2000,
 "progressRight": 0,
 "firstTransitionDuration": 0,
 "progressOpacity": 1,
 "paddingRight": 0,
 "progressBarBackgroundColorDirection": "vertical",
 "playbackBarHeadShadow": true,
 "progressBottom": 0,
 "toolTipBackgroundColor": "#F6F6F6",
 "toolTipFontColor": "#606060",
 "borderSize": 0,
 "playbackBarHeadBackgroundColorDirection": "vertical",
 "progressBackgroundOpacity": 1,
 "playbackBarProgressBackgroundColor": [
  "#3399FF"
 ],
 "playbackBarOpacity": 1,
 "progressHeight": 10,
 "vrPointerColor": "#FFFFFF",
 "progressBarOpacity": 1,
 "playbackBarHeadShadowOpacity": 0.7,
 "displayTooltipInTouchScreens": true,
 "playbackBarBorderColor": "#FFFFFF",
 "progressBorderSize": 0,
 "toolTipBorderSize": 1,
 "toolTipPaddingTop": 4,
 "toolTipPaddingLeft": 6,
 "progressBorderRadius": 0,
 "toolTipPaddingRight": 6,
 "toolTipDisplayTime": 600,
 "paddingTop": 0,
 "playbackBarLeft": 0,
 "playbackBarHeadShadowHorizontalLength": 0,
 "progressBackgroundColorRatios": [
  0
 ],
 "playbackBarProgressBackgroundColorRatios": [
  0
 ],
 "toolTipBorderRadius": 3,
 "borderRadius": 0,
 "paddingBottom": 0,
 "playbackBarHeadHeight": 15,
 "playbackBarHeadBackgroundColorRatios": [
  0,
  1
 ],
 "playbackBarHeadShadowBlurRadius": 3,
 "progressBarBackgroundColorRatios": [
  0
 ],
 "progressBackgroundColorDirection": "vertical",
 "progressBarBorderColor": "#000000",
 "transitionDuration": 500,
 "data": {
  "name": "Main Viewer"
 }
},
{
 "scrollBarWidth": 10,
 "itemMode": "normal",
 "itemLabelFontStyle": "normal",
 "paddingLeft": 20,
 "scrollBarColor": "#FFFFFF",
 "class": "ThumbnailList",
 "right": "0%",
 "scrollBarOpacity": 0.5,
 "itemLabelHorizontalAlign": "center",
 "id": "ThumbnailList_519315CD_5D2D_5665_41C2_83700ED94704",
 "scrollBarVisible": "rollOver",
 "itemLabelFontFamily": "Arial",
 "itemThumbnailOpacity": 1,
 "width": "100%",
 "minHeight": 1,
 "itemThumbnailShadowOpacity": 0.8,
 "verticalAlign": "top",
 "minWidth": 1,
 "itemPaddingRight": 3,
 "itemBorderRadius": 0,
 "backgroundColor": [
  "#000000"
 ],
 "itemPaddingLeft": 3,
 "itemHorizontalAlign": "center",
 "itemOpacity": 1,
 "itemBackgroundOpacity": 0,
 "itemLabelPosition": "bottom",
 "itemThumbnailShadowSpread": 1,
 "backgroundOpacity": 0.2,
 "itemThumbnailBorderRadius": 5,
 "itemPaddingTop": 3,
 "shadow": false,
 "itemBackgroundColor": [],
 "propagateClick": false,
 "itemThumbnailShadowVerticalLength": 3,
 "itemBackgroundColorRatios": [],
 "paddingRight": 20,
 "backgroundColorDirection": "vertical",
 "borderSize": 0,
 "selectedItemLabelFontWeight": "bold",
 "itemLabelFontWeight": "normal",
 "itemLabelTextDecoration": "none",
 "playList": "this.ThumbnailList_519315CD_5D2D_5665_41C2_83700ED94704_playlist",
 "itemThumbnailShadowBlurRadius": 4,
 "bottom": "0%",
 "itemLabelFontSize": 14,
 "itemVerticalAlign": "middle",
 "scrollBarMargin": 2,
 "itemLabelFontColor": "#FFFFFF",
 "itemThumbnailScaleMode": "fit_outside",
 "itemThumbnailShadowHorizontalLength": 3,
 "layout": "horizontal",
 "itemThumbnailHeight": 75,
 "paddingTop": 10,
 "itemBackgroundColorDirection": "vertical",
 "borderRadius": 5,
 "gap": 10,
 "paddingBottom": 10,
 "itemLabelGap": 10,
 "itemThumbnailShadow": true,
 "horizontalAlign": "center",
 "itemThumbnailShadowColor": "#000000",
 "itemPaddingBottom": 3,
 "backgroundColorRatios": [
  0
 ],
 "data": {
  "name": "ThumbnailList1355"
 },
 "itemThumbnailWidth": 150
},
{
 "data": {
  "name": "--SETTINGS"
 },
 "children": [
  "this.Container_532DC206_5D2D_2DE7_41BD_A86E3780D7AB",
  "this.Container_532E120B_5D2D_2DED_41D0_8FDED70A663E"
 ],
 "paddingLeft": 0,
 "scrollBarColor": "#000000",
 "id": "Container_532EA20B_5D2D_2DED_4199_DB6E156EB8FC",
 "class": "Container",
 "right": "0%",
 "width": 115.05,
 "paddingRight": 0,
 "borderSize": 0,
 "scrollBarVisible": "rollOver",
 "minHeight": 1,
 "scrollBarOpacity": 0.5,
 "scrollBarMargin": 2,
 "contentOpaque": false,
 "minWidth": 1,
 "verticalAlign": "top",
 "height": 641,
 "top": "0%",
 "layout": "absolute",
 "paddingTop": 0,
 "backgroundOpacity": 0,
 "borderRadius": 0,
 "gap": 10,
 "paddingBottom": 0,
 "shadow": false,
 "scrollBarWidth": 10,
 "propagateClick": true,
 "overflow": "scroll",
 "horizontalAlign": "left"
},
{
 "maxHeight": 58,
 "maxWidth": 58,
 "paddingLeft": 0,
 "id": "IconButton_532E720B_5D2D_2DED_41CA_40FB0C117DE4",
 "class": "IconButton",
 "width": 58,
 "paddingRight": 0,
 "borderSize": 0,
 "transparencyActive": true,
 "minHeight": 1,
 "iconURL": "skin/IconButton_532E720B_5D2D_2DED_41CA_40FB0C117DE4.png",
 "verticalAlign": "middle",
 "minWidth": 1,
 "mode": "toggle",
 "height": 58,
 "paddingTop": 0,
 "pressedRollOverIconURL": "skin/IconButton_532E720B_5D2D_2DED_41CA_40FB0C117DE4_pressed_rollover.png",
 "backgroundOpacity": 0,
 "borderRadius": 0,
 "paddingBottom": 0,
 "shadow": false,
 "pressedIconURL": "skin/IconButton_532E720B_5D2D_2DED_41CA_40FB0C117DE4_pressed.png",
 "cursor": "hand",
 "propagateClick": true,
 "data": {
  "name": "IconButton FULLSCREEN"
 },
 "horizontalAlign": "center"
},
{
 "enabledInCardboard": true,
 "rollOverDisplay": false,
 "items": [
  {
   "hfov": 7.93,
   "image": "this.AnimatedImageResource_425E1C05_55A6_3C1C_41D2_4DD84B23422F",
   "pitch": -28.25,
   "yaw": -5.31,
   "class": "HotspotPanoramaOverlayImage",
   "distance": 100
  }
 ],
 "useHandCursor": true,
 "areas": [
  {
   "click": "this.mainPlayList.set('selectedIndex', 7)",
   "mapColor": "#FF0000",
   "class": "HotspotPanoramaOverlayArea"
  }
 ],
 "id": "overlay_4572E768_55AA_2C14_41CB_36F8A5D72FD4",
 "data": {
  "label": "Circle Point 01"
 },
 "class": "HotspotPanoramaOverlay",
 "maps": [
  {
   "hfov": 7.93,
   "yaw": -5.31,
   "class": "HotspotPanoramaOverlayMap",
   "pitch": -28.25,
   "image": {
    "class": "ImageResource",
    "levels": [
     {
      "url": "media/panorama_5FE2FE4F_559B_FC2C_41A4_BE2E6B3732EE_1_HS_0_0_0_map.gif",
      "width": 16,
      "class": "ImageResourceLevel",
      "height": 16
     }
    ]
   }
  }
 ]
},
{
 "enabledInCardboard": true,
 "rollOverDisplay": false,
 "items": [
  {
   "hfov": 8.97,
   "image": "this.AnimatedImageResource_425EEC05_55A6_3C1C_41C2_2C856F5CFD41",
   "pitch": -4.57,
   "yaw": -174.63,
   "class": "HotspotPanoramaOverlayImage",
   "distance": 100
  }
 ],
 "useHandCursor": true,
 "areas": [
  {
   "click": "this.mainPlayList.set('selectedIndex', 6)",
   "mapColor": "#FF0000",
   "class": "HotspotPanoramaOverlayArea"
  }
 ],
 "id": "overlay_44D884AD_55AA_2C6D_41C4_75D788BF4B86",
 "data": {
  "label": "Circle Point 01"
 },
 "class": "HotspotPanoramaOverlay",
 "maps": [
  {
   "hfov": 8.97,
   "yaw": -174.63,
   "class": "HotspotPanoramaOverlayMap",
   "pitch": -4.57,
   "image": {
    "class": "ImageResource",
    "levels": [
     {
      "url": "media/panorama_5FE2FE4F_559B_FC2C_41A4_BE2E6B3732EE_1_HS_1_0_0_map.gif",
      "width": 16,
      "class": "ImageResourceLevel",
      "height": 16
     }
    ]
   }
  }
 ]
},
{
 "enabledInCardboard": true,
 "rollOverDisplay": false,
 "items": [
  {
   "hfov": 8.93,
   "image": "this.AnimatedImageResource_425E9C05_55A6_3C1C_41D2_85A2E5177F64",
   "pitch": -7.06,
   "yaw": -141.93,
   "class": "HotspotPanoramaOverlayImage",
   "distance": 100
  }
 ],
 "useHandCursor": true,
 "areas": [
  {
   "click": "this.mainPlayList.set('selectedIndex', 2)",
   "mapColor": "#FF0000",
   "class": "HotspotPanoramaOverlayArea"
  }
 ],
 "id": "overlay_44C908DC_55BA_642C_41AC_C3C39E5B17E2",
 "data": {
  "label": "Circle Point 01"
 },
 "class": "HotspotPanoramaOverlay",
 "maps": [
  {
   "hfov": 8.93,
   "yaw": -141.93,
   "class": "HotspotPanoramaOverlayMap",
   "pitch": -7.06,
   "image": {
    "class": "ImageResource",
    "levels": [
     {
      "url": "media/panorama_5FE2FE4F_559B_FC2C_41A4_BE2E6B3732EE_1_HS_2_0_0_map.gif",
      "width": 16,
      "class": "ImageResourceLevel",
      "height": 16
     }
    ]
   }
  }
 ]
},
{
 "enabledInCardboard": true,
 "rollOverDisplay": false,
 "items": [
  {
   "hfov": 8.8,
   "image": "this.AnimatedImageResource_425E4C05_55A6_3C1C_41D1_355DE7CE2471",
   "pitch": -12.21,
   "yaw": 149.59,
   "class": "HotspotPanoramaOverlayImage",
   "distance": 100
  }
 ],
 "useHandCursor": true,
 "areas": [
  {
   "click": "this.mainPlayList.set('selectedIndex', 4)",
   "mapColor": "#FF0000",
   "class": "HotspotPanoramaOverlayArea"
  }
 ],
 "id": "overlay_47D5A43E_55B9_EC6C_41C7_F980C0FC4173",
 "data": {
  "label": "Circle Point 01"
 },
 "class": "HotspotPanoramaOverlay",
 "maps": [
  {
   "hfov": 8.8,
   "yaw": 149.59,
   "class": "HotspotPanoramaOverlayMap",
   "pitch": -12.21,
   "image": {
    "class": "ImageResource",
    "levels": [
     {
      "url": "media/panorama_5FE12600_559B_EC14_41D4_D4C725CB8C27_1_HS_0_0_0_map.gif",
      "width": 16,
      "class": "ImageResourceLevel",
      "height": 16
     }
    ]
   }
  }
 ]
},
{
 "enabledInCardboard": true,
 "rollOverDisplay": false,
 "items": [
  {
   "hfov": 8.73,
   "image": "this.AnimatedImageResource_425F9C05_55A6_3C1C_41D0_B944A9A02F9D",
   "pitch": -13.95,
   "yaw": -65.87,
   "class": "HotspotPanoramaOverlayImage",
   "distance": 100
  }
 ],
 "useHandCursor": true,
 "areas": [
  {
   "click": "this.mainPlayList.set('selectedIndex', 12)",
   "mapColor": "#FF0000",
   "class": "HotspotPanoramaOverlayArea"
  }
 ],
 "id": "overlay_456FC93F_55AA_246C_41B0_3BD8C9263356",
 "data": {
  "label": "Circle Point 01"
 },
 "class": "HotspotPanoramaOverlay",
 "maps": [
  {
   "hfov": 8.73,
   "yaw": -65.87,
   "class": "HotspotPanoramaOverlayMap",
   "pitch": -13.95,
   "image": {
    "class": "ImageResource",
    "levels": [
     {
      "url": "media/panorama_5FF0D766_559A_2C1F_41AB_512BD6518694_1_HS_0_0_0_map.gif",
      "width": 16,
      "class": "ImageResourceLevel",
      "height": 16
     }
    ]
   }
  }
 ]
},
{
 "enabledInCardboard": true,
 "rollOverDisplay": false,
 "items": [
  {
   "hfov": 8.98,
   "image": "this.AnimatedImageResource_425E6C05_55A6_3C1C_41D2_159594C9986C",
   "pitch": -3.87,
   "yaw": 81.74,
   "class": "HotspotPanoramaOverlayImage",
   "distance": 100
  }
 ],
 "useHandCursor": true,
 "areas": [
  {
   "click": "this.mainPlayList.set('selectedIndex', 1)",
   "mapColor": "#FF0000",
   "class": "HotspotPanoramaOverlayArea"
  }
 ],
 "id": "overlay_4493813D_55AE_646C_419B_615A59E08D1F",
 "data": {
  "label": "Circle Point 01"
 },
 "class": "HotspotPanoramaOverlay",
 "maps": [
  {
   "hfov": 8.98,
   "yaw": 81.74,
   "class": "HotspotPanoramaOverlayMap",
   "pitch": -3.87,
   "image": {
    "class": "ImageResource",
    "levels": [
     {
      "url": "media/panorama_5FF0D766_559A_2C1F_41AB_512BD6518694_1_HS_1_0_0_map.gif",
      "width": 16,
      "class": "ImageResourceLevel",
      "height": 16
     }
    ]
   }
  }
 ]
},
{
 "enabledInCardboard": true,
 "rollOverDisplay": false,
 "items": [
  {
   "hfov": 8.96,
   "image": "this.AnimatedImageResource_42514C05_55A6_3C1C_41C0_FFD5B70289E9",
   "pitch": -5.67,
   "yaw": -101.23,
   "class": "HotspotPanoramaOverlayImage",
   "distance": 100
  }
 ],
 "useHandCursor": true,
 "areas": [
  {
   "click": "this.mainPlayList.set('selectedIndex', 2)",
   "mapColor": "#FF0000",
   "class": "HotspotPanoramaOverlayArea"
  }
 ],
 "id": "overlay_41CA7B3B_55BA_2474_41C3_F07B138E10F5",
 "data": {
  "label": "Circle Point 01"
 },
 "class": "HotspotPanoramaOverlay",
 "maps": [
  {
   "hfov": 8.96,
   "yaw": -101.23,
   "class": "HotspotPanoramaOverlayMap",
   "pitch": -5.67,
   "image": {
    "class": "ImageResource",
    "levels": [
     {
      "url": "media/panorama_5F183A9A_559B_E437_419D_074434E00356_1_HS_0_0_0_map.gif",
      "width": 16,
      "class": "ImageResourceLevel",
      "height": 16
     }
    ]
   }
  }
 ]
},
{
 "enabledInCardboard": true,
 "rollOverDisplay": false,
 "items": [
  {
   "hfov": 7.54,
   "image": "this.AnimatedImageResource_42516C05_55A6_3C1C_41BB_7EAAE595B93D",
   "pitch": -33.11,
   "yaw": 100.15,
   "class": "HotspotPanoramaOverlayImage",
   "distance": 100
  }
 ],
 "useHandCursor": true,
 "areas": [
  {
   "click": "this.mainPlayList.set('selectedIndex', 9)",
   "mapColor": "#FF0000",
   "class": "HotspotPanoramaOverlayArea"
  }
 ],
 "id": "overlay_416C8A64_55BA_241C_41C8_110782240944",
 "data": {
  "label": "Circle Point 01"
 },
 "class": "HotspotPanoramaOverlay",
 "maps": [
  {
   "hfov": 7.54,
   "yaw": 100.15,
   "class": "HotspotPanoramaOverlayMap",
   "pitch": -33.11,
   "image": {
    "class": "ImageResource",
    "levels": [
     {
      "url": "media/panorama_5F183A9A_559B_E437_419D_074434E00356_1_HS_1_0_0_map.gif",
      "width": 16,
      "class": "ImageResourceLevel",
      "height": 16
     }
    ]
   }
  }
 ]
},
{
 "enabledInCardboard": true,
 "rollOverDisplay": false,
 "items": [
  {
   "hfov": 8.62,
   "image": "this.AnimatedImageResource_4251CC05_55A6_3C1C_41A0_38CE3B8373B6",
   "pitch": -16.66,
   "yaw": 2.79,
   "class": "HotspotPanoramaOverlayImage",
   "distance": 100
  }
 ],
 "useHandCursor": true,
 "areas": [
  {
   "click": "this.mainPlayList.set('selectedIndex', 7)",
   "mapColor": "#FF0000",
   "class": "HotspotPanoramaOverlayArea"
  }
 ],
 "id": "overlay_40807745_55BA_6C1C_41CD_622086FAA163",
 "data": {
  "label": "Circle Point 01"
 },
 "class": "HotspotPanoramaOverlay",
 "maps": [
  {
   "hfov": 8.62,
   "yaw": 2.79,
   "class": "HotspotPanoramaOverlayMap",
   "pitch": -16.66,
   "image": {
    "class": "ImageResource",
    "levels": [
     {
      "url": "media/panorama_5F183A9A_559B_E437_419D_074434E00356_1_HS_2_0_0_map.gif",
      "width": 16,
      "class": "ImageResourceLevel",
      "height": 16
     }
    ]
   }
  }
 ]
},
{
 "maxHeight": 58,
 "maxWidth": 58,
 "paddingLeft": 0,
 "id": "IconButton_532E320B_5D2D_2DED_41C2_0771F0A3CFDB",
 "class": "IconButton",
 "width": 58,
 "paddingRight": 0,
 "borderSize": 0,
 "transparencyActive": true,
 "minHeight": 1,
 "iconURL": "skin/IconButton_532E320B_5D2D_2DED_41C2_0771F0A3CFDB.png",
 "verticalAlign": "middle",
 "minWidth": 1,
 "mode": "toggle",
 "height": 58,
 "paddingTop": 0,
 "pressedRollOverIconURL": "skin/IconButton_532E320B_5D2D_2DED_41C2_0771F0A3CFDB_pressed_rollover.png",
 "backgroundOpacity": 0,
 "borderRadius": 0,
 "paddingBottom": 0,
 "shadow": false,
 "pressedIconURL": "skin/IconButton_532E320B_5D2D_2DED_41C2_0771F0A3CFDB_pressed.png",
 "cursor": "hand",
 "propagateClick": true,
 "data": {
  "name": "IconButton GYRO"
 },
 "horizontalAlign": "center"
},
{
 "maxHeight": 58,
 "maxWidth": 58,
 "paddingLeft": 0,
 "id": "IconButton_532E520B_5D2D_2DED_41D4_B703E0AAEDE8",
 "class": "IconButton",
 "width": 58,
 "paddingRight": 0,
 "borderSize": 0,
 "transparencyActive": true,
 "minHeight": 1,
 "iconURL": "skin/IconButton_532E520B_5D2D_2DED_41D4_B703E0AAEDE8.png",
 "verticalAlign": "middle",
 "minWidth": 1,
 "mode": "toggle",
 "height": 58,
 "paddingTop": 0,
 "pressedRollOverIconURL": "skin/IconButton_532E520B_5D2D_2DED_41D4_B703E0AAEDE8_pressed_rollover.png",
 "backgroundOpacity": 0,
 "borderRadius": 0,
 "paddingBottom": 0,
 "shadow": false,
 "pressedIconURL": "skin/IconButton_532E520B_5D2D_2DED_41D4_B703E0AAEDE8_pressed.png",
 "cursor": "hand",
 "propagateClick": true,
 "data": {
  "name": "IconButton HS "
 },
 "horizontalAlign": "center"
},
{
 "maxHeight": 58,
 "maxWidth": 58,
 "paddingLeft": 0,
 "id": "IconButton_532E020B_5D2D_2DED_41D3_4EC3326FFF7E",
 "class": "IconButton",
 "width": 58,
 "paddingRight": 0,
 "borderSize": 0,
 "transparencyActive": true,
 "minHeight": 1,
 "iconURL": "skin/IconButton_532E020B_5D2D_2DED_41D3_4EC3326FFF7E.png",
 "verticalAlign": "middle",
 "minWidth": 1,
 "mode": "push",
 "height": 58,
 "paddingTop": 0,
 "backgroundOpacity": 0,
 "borderRadius": 0,
 "paddingBottom": 0,
 "rollOverIconURL": "skin/IconButton_532E020B_5D2D_2DED_41D3_4EC3326FFF7E_rollover.png",
 "shadow": false,
 "cursor": "hand",
 "propagateClick": true,
 "data": {
  "name": "IconButton VR"
 },
 "horizontalAlign": "center"
},
{
 "enabledInCardboard": true,
 "rollOverDisplay": false,
 "items": [
  {
   "hfov": 8.47,
   "image": "this.AnimatedImageResource_425CCC04_55A6_3C1C_4197_C8DA9456F7EC",
   "pitch": -19.79,
   "yaw": 91.7,
   "class": "HotspotPanoramaOverlayImage",
   "distance": 100
  }
 ],
 "useHandCursor": true,
 "areas": [
  {
   "click": "this.mainPlayList.set('selectedIndex', 2)",
   "mapColor": "#FF0000",
   "class": "HotspotPanoramaOverlayArea"
  }
 ],
 "id": "overlay_5BCE7AD5_55A6_E43C_41C3_967DB5FD479A",
 "data": {
  "label": "Circle Point 01"
 },
 "class": "HotspotPanoramaOverlay",
 "maps": [
  {
   "hfov": 8.47,
   "yaw": 91.7,
   "class": "HotspotPanoramaOverlayMap",
   "pitch": -19.79,
   "image": {
    "class": "ImageResource",
    "levels": [
     {
      "url": "media/panorama_5FFE73AF_559A_246D_41BE_6C970F53DC32_1_HS_0_0_0_map.gif",
      "width": 16,
      "class": "ImageResourceLevel",
      "height": 16
     }
    ]
   }
  }
 ]
},
{
 "enabledInCardboard": true,
 "rollOverDisplay": false,
 "items": [
  {
   "hfov": 7.67,
   "image": "this.AnimatedImageResource_425CFC04_55A6_3C1C_41C5_83DF60608137",
   "pitch": -31.49,
   "yaw": -113.68,
   "class": "HotspotPanoramaOverlayImage",
   "distance": 100
  }
 ],
 "useHandCursor": true,
 "areas": [
  {
   "click": "this.mainPlayList.set('selectedIndex', 0)",
   "mapColor": "#FF0000",
   "class": "HotspotPanoramaOverlayArea"
  }
 ],
 "id": "overlay_5B2304CF_55A6_2C2C_41A3_E7DE364B26D2",
 "data": {
  "label": "Circle Point 01"
 },
 "class": "HotspotPanoramaOverlay",
 "maps": [
  {
   "hfov": 7.67,
   "yaw": -113.68,
   "class": "HotspotPanoramaOverlayMap",
   "pitch": -31.49,
   "image": {
    "class": "ImageResource",
    "levels": [
     {
      "url": "media/panorama_5FFE73AF_559A_246D_41BE_6C970F53DC32_1_HS_1_0_0_map.gif",
      "width": 16,
      "class": "ImageResourceLevel",
      "height": 16
     }
    ]
   }
  }
 ]
},
{
 "enabledInCardboard": true,
 "rollOverDisplay": false,
 "items": [
  {
   "hfov": 8.98,
   "image": "this.AnimatedImageResource_425CAC04_55A6_3C1C_41C3_D8E955947019",
   "pitch": -3.94,
   "yaw": -17.64,
   "class": "HotspotPanoramaOverlayImage",
   "distance": 100
  }
 ],
 "useHandCursor": true,
 "areas": [
  {
   "click": "this.mainPlayList.set('selectedIndex', 3)",
   "mapColor": "#FF0000",
   "class": "HotspotPanoramaOverlayArea"
  }
 ],
 "id": "overlay_5ACC35DC_55A6_6C33_41C6_B08B72828ACE",
 "data": {
  "label": "Circle Point 01"
 },
 "class": "HotspotPanoramaOverlay",
 "maps": [
  {
   "hfov": 8.98,
   "yaw": -17.64,
   "class": "HotspotPanoramaOverlayMap",
   "pitch": -3.94,
   "image": {
    "class": "ImageResource",
    "levels": [
     {
      "url": "media/panorama_5FFE73AF_559A_246D_41BE_6C970F53DC32_1_HS_2_0_0_map.gif",
      "width": 16,
      "class": "ImageResourceLevel",
      "height": 16
     }
    ]
   }
  }
 ]
},
{
 "enabledInCardboard": true,
 "rollOverDisplay": false,
 "items": [
  {
   "hfov": 7.67,
   "image": "this.AnimatedImageResource_425DAC04_55A6_3C1C_41BA_C9C48781A183",
   "pitch": -31.55,
   "yaw": 56.8,
   "class": "HotspotPanoramaOverlayImage",
   "distance": 100
  }
 ],
 "useHandCursor": true,
 "areas": [
  {
   "click": "this.mainPlayList.set('selectedIndex', 1)",
   "mapColor": "#FF0000",
   "class": "HotspotPanoramaOverlayArea"
  }
 ],
 "id": "overlay_5898665C_559E_EC2C_41AC_DAF26182BFB3",
 "data": {
  "label": "Circle Point 01"
 },
 "class": "HotspotPanoramaOverlay",
 "maps": [
  {
   "hfov": 7.67,
   "yaw": 56.8,
   "class": "HotspotPanoramaOverlayMap",
   "pitch": -31.55,
   "image": {
    "class": "ImageResource",
    "levels": [
     {
      "url": "media/panorama_5FE05EA7_559B_DC1C_41CC_82457BE41622_1_HS_0_0_0_map.gif",
      "width": 16,
      "class": "ImageResourceLevel",
      "height": 16
     }
    ]
   }
  }
 ]
},
{
 "enabledInCardboard": true,
 "rollOverDisplay": false,
 "items": [
  {
   "hfov": 8.83,
   "image": "this.AnimatedImageResource_425C0C04_55A6_3C1C_41A2_1E0D819F2EAC",
   "pitch": -11.08,
   "yaw": -0.42,
   "class": "HotspotPanoramaOverlayImage",
   "distance": 100
  }
 ],
 "useHandCursor": true,
 "areas": [
  {
   "click": "this.mainPlayList.set('selectedIndex', 3)",
   "mapColor": "#FF0000",
   "class": "HotspotPanoramaOverlayArea"
  }
 ],
 "id": "overlay_5B85F0E2_559E_2414_41D4_A59F9DD58A1A",
 "data": {
  "label": "Circle Point 01"
 },
 "class": "HotspotPanoramaOverlay",
 "maps": [
  {
   "hfov": 8.83,
   "yaw": -0.42,
   "class": "HotspotPanoramaOverlayMap",
   "pitch": -11.08,
   "image": {
    "class": "ImageResource",
    "levels": [
     {
      "url": "media/panorama_5FE05EA7_559B_DC1C_41CC_82457BE41622_1_HS_1_0_0_map.gif",
      "width": 16,
      "class": "ImageResourceLevel",
      "height": 16
     }
    ]
   }
  }
 ]
},
{
 "enabledInCardboard": true,
 "rollOverDisplay": false,
 "items": [
  {
   "hfov": 8.99,
   "image": "this.AnimatedImageResource_42506C07_55A6_3C1C_41CE_3C4FE596E9DE",
   "pitch": -2.77,
   "yaw": 122.62,
   "class": "HotspotPanoramaOverlayImage",
   "distance": 100
  }
 ],
 "useHandCursor": true,
 "areas": [
  {
   "click": "this.mainPlayList.set('selectedIndex', 7)",
   "mapColor": "#FF0000",
   "class": "HotspotPanoramaOverlayArea"
  }
 ],
 "id": "overlay_40C975E8_55A6_2C14_41C7_CA1433A8F5FC",
 "data": {
  "label": "Circle Point 01"
 },
 "class": "HotspotPanoramaOverlay",
 "maps": [
  {
   "hfov": 8.99,
   "yaw": 122.62,
   "class": "HotspotPanoramaOverlayMap",
   "pitch": -2.77,
   "image": {
    "class": "ImageResource",
    "levels": [
     {
      "url": "media/panorama_5FE3FFC1_559A_3C14_41B6_9D6FB711FAE1_1_HS_0_0_0_map.gif",
      "width": 16,
      "class": "ImageResourceLevel",
      "height": 16
     }
    ]
   }
  }
 ]
},
{
 "enabledInCardboard": true,
 "rollOverDisplay": false,
 "items": [
  {
   "hfov": 9.36,
   "image": "this.AnimatedImageResource_42503C07_55A6_3C1C_41C6_BD600A756189",
   "pitch": -22.5,
   "yaw": 174.93,
   "class": "HotspotPanoramaOverlayImage",
   "distance": 100
  }
 ],
 "useHandCursor": true,
 "areas": [
  {
   "click": "this.mainPlayList.set('selectedIndex', 11)",
   "mapColor": "#FF0000",
   "class": "HotspotPanoramaOverlayArea"
  }
 ],
 "id": "overlay_43153C00_55A7_DC14_41C8_819805E12BAC",
 "data": {
  "label": "Circle Point 01"
 },
 "class": "HotspotPanoramaOverlay",
 "maps": [
  {
   "hfov": 9.36,
   "yaw": 174.93,
   "class": "HotspotPanoramaOverlayMap",
   "pitch": -22.5,
   "image": {
    "class": "ImageResource",
    "levels": [
     {
      "url": "media/panorama_5FE3FFC1_559A_3C14_41B6_9D6FB711FAE1_1_HS_1_0_0_map.gif",
      "width": 16,
      "class": "ImageResourceLevel",
      "height": 16
     }
    ]
   }
  }
 ]
},
{
 "enabledInCardboard": true,
 "rollOverDisplay": false,
 "items": [
  {
   "hfov": 6.02,
   "image": "this.AnimatedImageResource_4250EC07_55A6_3C1C_41D1_ECADB4FC89DD",
   "pitch": -8.21,
   "yaw": 176.96,
   "class": "HotspotPanoramaOverlayImage",
   "distance": 100
  }
 ],
 "useHandCursor": true,
 "areas": [
  {
   "click": "this.mainPlayList.set('selectedIndex', 12)",
   "mapColor": "#FF0000",
   "class": "HotspotPanoramaOverlayArea"
  }
 ],
 "id": "overlay_40C95194_55A6_243C_41CF_E796D7BB1FCC",
 "data": {
  "label": "Circle Point 01"
 },
 "class": "HotspotPanoramaOverlay",
 "maps": [
  {
   "hfov": 6.02,
   "yaw": 176.96,
   "class": "HotspotPanoramaOverlayMap",
   "pitch": -8.21,
   "image": {
    "class": "ImageResource",
    "levels": [
     {
      "url": "media/panorama_5FE3FFC1_559A_3C14_41B6_9D6FB711FAE1_1_HS_2_0_0_map.gif",
      "width": 16,
      "class": "ImageResourceLevel",
      "height": 16
     }
    ]
   }
  }
 ]
},
{
 "enabledInCardboard": true,
 "rollOverDisplay": false,
 "items": [
  {
   "hfov": 9,
   "image": "this.AnimatedImageResource_4250BC07_55A6_3C1C_41D0_DC0EB148ABE7",
   "pitch": -1.56,
   "yaw": 149.94,
   "class": "HotspotPanoramaOverlayImage",
   "distance": 100
  }
 ],
 "useHandCursor": true,
 "areas": [
  {
   "click": "this.mainPlayList.set('selectedIndex', 5)",
   "mapColor": "#FF0000",
   "class": "HotspotPanoramaOverlayArea"
  }
 ],
 "id": "overlay_40DE44EF_55A6_2DEC_41A6_2F25C9DCBC80",
 "data": {
  "label": "Circle Point 01"
 },
 "class": "HotspotPanoramaOverlay",
 "maps": [
  {
   "hfov": 9,
   "yaw": 149.94,
   "class": "HotspotPanoramaOverlayMap",
   "pitch": -1.56,
   "image": {
    "class": "ImageResource",
    "levels": [
     {
      "url": "media/panorama_5FE3FFC1_559A_3C14_41B6_9D6FB711FAE1_1_HS_3_0_0_map.gif",
      "width": 16,
      "class": "ImageResourceLevel",
      "height": 16
     }
    ]
   }
  }
 ]
},
{
 "enabledInCardboard": true,
 "rollOverDisplay": false,
 "items": [
  {
   "hfov": 8.7,
   "image": "this.AnimatedImageResource_425F6C04_55A6_3C1C_41AA_B29F414DDA50",
   "pitch": -14.75,
   "yaw": -91.16,
   "class": "HotspotPanoramaOverlayImage",
   "distance": 100
  }
 ],
 "useHandCursor": true,
 "areas": [
  {
   "click": "this.mainPlayList.set('selectedIndex', 1)",
   "mapColor": "#FF0000",
   "class": "HotspotPanoramaOverlayArea"
  }
 ],
 "id": "overlay_45EDCFF4_55A6_3BFC_41C8_6E598B5FFE2A",
 "data": {
  "label": "Circle Point 01"
 },
 "class": "HotspotPanoramaOverlay",
 "maps": [
  {
   "hfov": 8.7,
   "yaw": -91.16,
   "class": "HotspotPanoramaOverlayMap",
   "pitch": -14.75,
   "image": {
    "class": "ImageResource",
    "levels": [
     {
      "url": "media/panorama_5FF43B4B_559A_2414_41A8_7B6F9A305344_1_HS_0_0_0_map.gif",
      "width": 16,
      "class": "ImageResourceLevel",
      "height": 16
     }
    ]
   }
  }
 ]
},
{
 "enabledInCardboard": true,
 "rollOverDisplay": false,
 "items": [
  {
   "hfov": 8.95,
   "image": "this.AnimatedImageResource_425F1C05_55A6_3C1C_41B6_3D2EE92132E8",
   "pitch": -5.96,
   "yaw": 3.54,
   "class": "HotspotPanoramaOverlayImage",
   "distance": 100
  }
 ],
 "useHandCursor": true,
 "areas": [
  {
   "click": "this.mainPlayList.set('selectedIndex', 5)",
   "mapColor": "#FF0000",
   "class": "HotspotPanoramaOverlayArea"
  }
 ],
 "id": "overlay_45BE240F_55AA_EC2C_41AF_6F283C5A44D5",
 "data": {
  "label": "Circle Point 01"
 },
 "class": "HotspotPanoramaOverlay",
 "maps": [
  {
   "hfov": 8.95,
   "yaw": 3.54,
   "class": "HotspotPanoramaOverlayMap",
   "pitch": -5.96,
   "image": {
    "class": "ImageResource",
    "levels": [
     {
      "url": "media/panorama_5FF43B4B_559A_2414_41A8_7B6F9A305344_1_HS_1_0_0_map.gif",
      "width": 16,
      "class": "ImageResourceLevel",
      "height": 16
     }
    ]
   }
  }
 ]
},
{
 "enabledInCardboard": true,
 "rollOverDisplay": false,
 "items": [
  {
   "hfov": 8.85,
   "image": "this.AnimatedImageResource_425FEC05_55A6_3C1C_41BF_814EC7D1019A",
   "pitch": -10.47,
   "yaw": 121.23,
   "class": "HotspotPanoramaOverlayImage",
   "distance": 100
  }
 ],
 "useHandCursor": true,
 "areas": [
  {
   "click": "this.mainPlayList.set('selectedIndex', 7)",
   "mapColor": "#FF0000",
   "class": "HotspotPanoramaOverlayArea"
  }
 ],
 "id": "overlay_5A417F83_55AB_FC14_41B3_35FDBAD5652B",
 "data": {
  "label": "Circle Point 01"
 },
 "class": "HotspotPanoramaOverlay",
 "maps": [
  {
   "hfov": 8.85,
   "yaw": 121.23,
   "class": "HotspotPanoramaOverlayMap",
   "pitch": -10.47,
   "image": {
    "class": "ImageResource",
    "levels": [
     {
      "url": "media/panorama_5FF43B4B_559A_2414_41A8_7B6F9A305344_1_HS_2_0_0_map.gif",
      "width": 16,
      "class": "ImageResourceLevel",
      "height": 16
     }
    ]
   }
  }
 ]
},
{
 "enabledInCardboard": true,
 "rollOverDisplay": false,
 "items": [
  {
   "hfov": 8.93,
   "image": "this.AnimatedImageResource_4251FC05_55A6_3C1C_41CF_2575B23F42E8",
   "pitch": -7.24,
   "yaw": 36.37,
   "class": "HotspotPanoramaOverlayImage",
   "distance": 100
  }
 ],
 "useHandCursor": true,
 "areas": [
  {
   "click": "this.mainPlayList.set('selectedIndex', 8)",
   "mapColor": "#FF0000",
   "class": "HotspotPanoramaOverlayArea"
  }
 ],
 "id": "overlay_408A0685_55BA_6C1C_41CF_1F3C0F525314",
 "data": {
  "label": "Circle Point 01"
 },
 "class": "HotspotPanoramaOverlay",
 "maps": [
  {
   "hfov": 8.93,
   "yaw": 36.37,
   "class": "HotspotPanoramaOverlayMap",
   "pitch": -7.24,
   "image": {
    "class": "ImageResource",
    "levels": [
     {
      "url": "media/panorama_5FA20A5E_559B_E42C_41C0_6982281411A6_1_HS_0_0_0_map.gif",
      "width": 16,
      "class": "ImageResourceLevel",
      "height": 16
     }
    ]
   }
  }
 ]
},
{
 "enabledInCardboard": true,
 "rollOverDisplay": false,
 "items": [
  {
   "hfov": 8.52,
   "image": "this.AnimatedImageResource_4251BC05_55A6_3C1C_41D0_3F232CB6EA9D",
   "pitch": -18.81,
   "yaw": 149.71,
   "class": "HotspotPanoramaOverlayImage",
   "distance": 100
  }
 ],
 "useHandCursor": true,
 "areas": [
  {
   "click": "this.mainPlayList.set('selectedIndex', 7)",
   "mapColor": "#FF0000",
   "class": "HotspotPanoramaOverlayArea"
  }
 ],
 "id": "overlay_41DF6957_55A6_243C_41D2_7885601A2203",
 "data": {
  "label": "Circle Point 01"
 },
 "class": "HotspotPanoramaOverlay",
 "maps": [
  {
   "hfov": 8.52,
   "yaw": 149.71,
   "class": "HotspotPanoramaOverlayMap",
   "pitch": -18.81,
   "image": {
    "class": "ImageResource",
    "levels": [
     {
      "url": "media/panorama_5FA20A5E_559B_E42C_41C0_6982281411A6_1_HS_1_0_0_map.gif",
      "width": 16,
      "class": "ImageResourceLevel",
      "height": 16
     }
    ]
   }
  }
 ]
},
{
 "enabledInCardboard": true,
 "rollOverDisplay": false,
 "items": [
  {
   "hfov": 8.51,
   "image": "this.AnimatedImageResource_425FCC05_55A6_3C1C_41CC_F4C7656E85DD",
   "pitch": -18.92,
   "yaw": -13.88,
   "class": "HotspotPanoramaOverlayImage",
   "distance": 100
  }
 ],
 "useHandCursor": true,
 "areas": [
  {
   "click": "this.mainPlayList.set('selectedIndex', 4)",
   "mapColor": "#FF0000",
   "class": "HotspotPanoramaOverlayArea"
  }
 ],
 "id": "overlay_47A39F55_55BA_5C3C_41BD_B8725B1586F1",
 "data": {
  "label": "Circle Point 01"
 },
 "class": "HotspotPanoramaOverlay",
 "maps": [
  {
   "hfov": 8.51,
   "yaw": -13.88,
   "class": "HotspotPanoramaOverlayMap",
   "pitch": -18.92,
   "image": {
    "class": "ImageResource",
    "levels": [
     {
      "url": "media/panorama_5FEFC24C_559B_E42C_41CF_0F1C7C7C96B3_1_HS_0_0_0_map.gif",
      "width": 16,
      "class": "ImageResourceLevel",
      "height": 16
     }
    ]
   }
  }
 ]
},
{
 "enabledInCardboard": true,
 "rollOverDisplay": false,
 "items": [
  {
   "hfov": 7.66,
   "image": "this.AnimatedImageResource_425F8C05_55A6_3C1C_41C4_229751011FCF",
   "pitch": -31.66,
   "yaw": -163.69,
   "class": "HotspotPanoramaOverlayImage",
   "distance": 100
  }
 ],
 "useHandCursor": true,
 "areas": [
  {
   "click": "this.mainPlayList.set('selectedIndex', 11)",
   "mapColor": "#FF0000",
   "class": "HotspotPanoramaOverlayArea"
  }
 ],
 "id": "overlay_478A89F0_55BA_27F4_41A7_1F0E16FCAD42",
 "data": {
  "label": "Circle Point 01"
 },
 "class": "HotspotPanoramaOverlay",
 "maps": [
  {
   "hfov": 7.66,
   "yaw": -163.69,
   "class": "HotspotPanoramaOverlayMap",
   "pitch": -31.66,
   "image": {
    "class": "ImageResource",
    "levels": [
     {
      "url": "media/panorama_5FEFC24C_559B_E42C_41CF_0F1C7C7C96B3_1_HS_1_0_0_map.gif",
      "width": 16,
      "class": "ImageResourceLevel",
      "height": 16
     }
    ]
   }
  }
 ]
},
{
 "enabledInCardboard": true,
 "rollOverDisplay": false,
 "items": [
  {
   "hfov": 8.59,
   "image": "this.AnimatedImageResource_425E7C05_55A6_3C1C_41C5_68947F7930DF",
   "pitch": -17.33,
   "yaw": -18.4,
   "class": "HotspotPanoramaOverlayImage",
   "distance": 100
  }
 ],
 "useHandCursor": true,
 "areas": [
  {
   "click": "this.mainPlayList.set('selectedIndex', 9)",
   "mapColor": "#FF0000",
   "class": "HotspotPanoramaOverlayArea"
  }
 ],
 "id": "overlay_47146B47_55BE_641C_41A0_12CE14BB0172",
 "data": {
  "label": "Circle Point 01"
 },
 "class": "HotspotPanoramaOverlay",
 "maps": [
  {
   "hfov": 8.59,
   "yaw": -18.4,
   "class": "HotspotPanoramaOverlayMap",
   "pitch": -17.33,
   "image": {
    "class": "ImageResource",
    "levels": [
     {
      "url": "media/panorama_5FEE165D_559B_EC2D_41C4_63B135524787_1_HS_0_0_0_map.gif",
      "width": 16,
      "class": "ImageResourceLevel",
      "height": 16
     }
    ]
   }
  }
 ]
},
{
 "enabledInCardboard": true,
 "rollOverDisplay": false,
 "items": [
  {
   "hfov": 8.65,
   "image": "this.AnimatedImageResource_425E3C05_55A6_3C1C_41C7_C887B0F57CC5",
   "pitch": -15.96,
   "yaw": 9.96,
   "class": "HotspotPanoramaOverlayImage",
   "distance": 100
  }
 ],
 "useHandCursor": true,
 "areas": [
  {
   "click": "this.mainPlayList.set('selectedIndex', 8)",
   "mapColor": "#FF0000",
   "class": "HotspotPanoramaOverlayArea"
  }
 ],
 "id": "overlay_469DFB41_55BE_E414_41B8_B69B5728EAAF",
 "data": {
  "label": "Circle Point 01"
 },
 "class": "HotspotPanoramaOverlay",
 "maps": [
  {
   "hfov": 8.65,
   "yaw": 9.96,
   "class": "HotspotPanoramaOverlayMap",
   "pitch": -15.96,
   "image": {
    "class": "ImageResource",
    "levels": [
     {
      "url": "media/panorama_5FEE165D_559B_EC2D_41C4_63B135524787_1_HS_1_0_0_map.gif",
      "width": 16,
      "class": "ImageResourceLevel",
      "height": 16
     }
    ]
   }
  }
 ]
},
{
 "enabledInCardboard": true,
 "rollOverDisplay": false,
 "items": [
  {
   "hfov": 8.3,
   "image": "this.AnimatedImageResource_425EFC05_55A6_3C1C_41C7_ADBCF73F1794",
   "pitch": -22.77,
   "yaw": -158.08,
   "class": "HotspotPanoramaOverlayImage",
   "distance": 100
  }
 ],
 "useHandCursor": true,
 "areas": [
  {
   "click": "this.mainPlayList.set('selectedIndex', 10)",
   "mapColor": "#FF0000",
   "class": "HotspotPanoramaOverlayArea"
  }
 ],
 "id": "overlay_46168637_55BE_2C7C_41D4_A58BB4261F18",
 "data": {
  "label": "Circle Point 01"
 },
 "class": "HotspotPanoramaOverlay",
 "maps": [
  {
   "hfov": 8.3,
   "yaw": -158.08,
   "class": "HotspotPanoramaOverlayMap",
   "pitch": -22.77,
   "image": {
    "class": "ImageResource",
    "levels": [
     {
      "url": "media/panorama_5FEE165D_559B_EC2D_41C4_63B135524787_1_HS_2_0_0_map.gif",
      "width": 16,
      "class": "ImageResourceLevel",
      "height": 16
     }
    ]
   }
  }
 ]
},
{
 "enabledInCardboard": true,
 "rollOverDisplay": false,
 "items": [
  {
   "hfov": 8.06,
   "image": "this.AnimatedImageResource_42530C07_55A6_3C1C_41C5_B48933B0DAC3",
   "pitch": -26.39,
   "yaw": -88.27,
   "class": "HotspotPanoramaOverlayImage",
   "distance": 100
  }
 ],
 "useHandCursor": true,
 "areas": [
  {
   "click": "this.mainPlayList.set('selectedIndex', 7)",
   "mapColor": "#FF0000",
   "class": "HotspotPanoramaOverlayArea"
  }
 ],
 "id": "overlay_4145078A_55AA_2C14_41CE_1122298413BA",
 "data": {
  "label": "Circle Point 01"
 },
 "class": "HotspotPanoramaOverlay",
 "maps": [
  {
   "hfov": 8.06,
   "yaw": -88.27,
   "class": "HotspotPanoramaOverlayMap",
   "pitch": -26.39,
   "image": {
    "class": "ImageResource",
    "levels": [
     {
      "url": "media/panorama_5F0C14DA_559A_2C34_41D1_B39A1CA2ED2D_1_HS_0_0_0_map.gif",
      "width": 16,
      "class": "ImageResourceLevel",
      "height": 16
     }
    ]
   }
  }
 ]
},
{
 "enabledInCardboard": true,
 "rollOverDisplay": false,
 "items": [
  {
   "hfov": 8.65,
   "image": "this.AnimatedImageResource_42533C07_55A6_3C1C_41B3_76FF051E60FA",
   "pitch": -16.03,
   "yaw": -38.54,
   "class": "HotspotPanoramaOverlayImage",
   "distance": 100
  }
 ],
 "useHandCursor": true,
 "areas": [
  {
   "click": "this.mainPlayList.set('selectedIndex', 5)",
   "mapColor": "#FF0000",
   "class": "HotspotPanoramaOverlayArea"
  }
 ],
 "id": "overlay_40DE961C_55AA_2C2C_41C9_C36CBC3F9488",
 "data": {
  "label": "Circle Point 01"
 },
 "class": "HotspotPanoramaOverlay",
 "maps": [
  {
   "hfov": 8.65,
   "yaw": -38.54,
   "class": "HotspotPanoramaOverlayMap",
   "pitch": -16.03,
   "image": {
    "class": "ImageResource",
    "levels": [
     {
      "url": "media/panorama_5F0C14DA_559A_2C34_41D1_B39A1CA2ED2D_1_HS_1_0_0_map.gif",
      "width": 16,
      "class": "ImageResourceLevel",
      "height": 16
     }
    ]
   }
  }
 ]
},
{
 "enabledInCardboard": true,
 "rollOverDisplay": false,
 "items": [
  {
   "hfov": 8.65,
   "image": "this.AnimatedImageResource_4253FC07_55A6_3C1C_41B7_3D13C3B3046C",
   "pitch": -16.03,
   "yaw": 2.55,
   "class": "HotspotPanoramaOverlayImage",
   "distance": 100
  }
 ],
 "useHandCursor": true,
 "areas": [
  {
   "click": "this.mainPlayList.set('selectedIndex', 12)",
   "mapColor": "#FF0000",
   "class": "HotspotPanoramaOverlayArea"
  }
 ],
 "id": "overlay_43BD19D0_55AB_E434_41C4_B4A07DD4BCE2",
 "data": {
  "label": "Circle Point 01"
 },
 "class": "HotspotPanoramaOverlay",
 "maps": [
  {
   "hfov": 8.65,
   "yaw": 2.55,
   "class": "HotspotPanoramaOverlayMap",
   "pitch": -16.03,
   "image": {
    "class": "ImageResource",
    "levels": [
     {
      "url": "media/panorama_5F0C14DA_559A_2C34_41D1_B39A1CA2ED2D_1_HS_2_0_0_map.gif",
      "width": 16,
      "class": "ImageResourceLevel",
      "height": 16
     }
    ]
   }
  }
 ]
},
{
 "enabledInCardboard": true,
 "rollOverDisplay": false,
 "items": [
  {
   "hfov": 7.71,
   "image": "this.AnimatedImageResource_4253AC07_55A6_3C1C_4188_0E3F5B92775D",
   "pitch": -31.08,
   "yaw": 150.86,
   "class": "HotspotPanoramaOverlayImage",
   "distance": 100
  }
 ],
 "useHandCursor": true,
 "areas": [
  {
   "click": "this.mainPlayList.set('selectedIndex', 10)",
   "mapColor": "#FF0000",
   "class": "HotspotPanoramaOverlayArea"
  }
 ],
 "id": "overlay_4052189A_55AA_2434_41D4_4A3F62BE4F2C",
 "data": {
  "label": "Circle Point 01"
 },
 "class": "HotspotPanoramaOverlay",
 "maps": [
  {
   "hfov": 7.71,
   "yaw": 150.86,
   "class": "HotspotPanoramaOverlayMap",
   "pitch": -31.08,
   "image": {
    "class": "ImageResource",
    "levels": [
     {
      "url": "media/panorama_5F0C14DA_559A_2C34_41D1_B39A1CA2ED2D_1_HS_3_0_0_map.gif",
      "width": 16,
      "class": "ImageResourceLevel",
      "height": 16
     }
    ]
   }
  }
 ]
},
{
 "enabledInCardboard": true,
 "rollOverDisplay": false,
 "items": [
  {
   "hfov": 8.63,
   "image": "this.AnimatedImageResource_42527C07_55A6_3C1C_4196_C98234EE9809",
   "pitch": -16.55,
   "yaw": 110.11,
   "class": "HotspotPanoramaOverlayImage",
   "distance": 100
  }
 ],
 "useHandCursor": true,
 "areas": [
  {
   "click": "this.mainPlayList.set('selectedIndex', 3)",
   "mapColor": "#FF0000",
   "class": "HotspotPanoramaOverlayArea"
  }
 ],
 "id": "overlay_43432A3A_55AE_2477_41D4_C8FC2FFD495F",
 "data": {
  "label": "Circle Point 01"
 },
 "class": "HotspotPanoramaOverlay",
 "maps": [
  {
   "hfov": 8.63,
   "yaw": 110.11,
   "class": "HotspotPanoramaOverlayMap",
   "pitch": -16.55,
   "image": {
    "class": "ImageResource",
    "levels": [
     {
      "url": "media/panorama_5F002981_559A_2414_41B3_6BC2B132EDF2_1_HS_0_0_0_map.gif",
      "width": 16,
      "class": "ImageResourceLevel",
      "height": 16
     }
    ]
   }
  }
 ]
},
{
 "enabledInCardboard": true,
 "rollOverDisplay": false,
 "items": [
  {
   "hfov": 8.3,
   "image": "this.AnimatedImageResource_42522C07_55A6_3C1C_418C_2052FEC127CB",
   "pitch": -22.8,
   "yaw": 3.83,
   "class": "HotspotPanoramaOverlayImage",
   "distance": 100
  }
 ],
 "useHandCursor": true,
 "areas": [
  {
   "click": "this.mainPlayList.set('selectedIndex', 11)",
   "mapColor": "#FF0000",
   "class": "HotspotPanoramaOverlayArea"
  }
 ],
 "id": "overlay_4DF126DD_55AE_2C2C_41B4_28A3A167C738",
 "data": {
  "label": "Circle Point 01"
 },
 "class": "HotspotPanoramaOverlay",
 "maps": [
  {
   "hfov": 8.3,
   "yaw": 3.83,
   "class": "HotspotPanoramaOverlayMap",
   "pitch": -22.8,
   "image": {
    "class": "ImageResource",
    "levels": [
     {
      "url": "media/panorama_5F002981_559A_2414_41B3_6BC2B132EDF2_1_HS_1_0_0_map.gif",
      "width": 16,
      "class": "ImageResourceLevel",
      "height": 16
     }
    ]
   }
  }
 ]
},
{
 "enabledInCardboard": true,
 "rollOverDisplay": false,
 "items": [
  {
   "hfov": 8.92,
   "image": "this.AnimatedImageResource_4252FC07_55A6_3C1C_41CB_5CCC81E75F53",
   "pitch": -7.7,
   "yaw": -4.5,
   "class": "HotspotPanoramaOverlayImage",
   "distance": 100
  }
 ],
 "useHandCursor": true,
 "areas": [
  {
   "click": "this.mainPlayList.set('selectedIndex', 10)",
   "mapColor": "#FF0000",
   "class": "HotspotPanoramaOverlayArea"
  }
 ],
 "id": "overlay_4290728D_55AE_642C_4193_428BD58845D0",
 "data": {
  "label": "Circle Point 01"
 },
 "class": "HotspotPanoramaOverlay",
 "maps": [
  {
   "hfov": 8.92,
   "yaw": -4.5,
   "class": "HotspotPanoramaOverlayMap",
   "pitch": -7.7,
   "image": {
    "class": "ImageResource",
    "levels": [
     {
      "url": "media/panorama_5F002981_559A_2414_41B3_6BC2B132EDF2_1_HS_2_0_0_map.gif",
      "width": 16,
      "class": "ImageResourceLevel",
      "height": 16
     }
    ]
   }
  }
 ]
},
{
 "enabledInCardboard": true,
 "rollOverDisplay": false,
 "items": [
  {
   "hfov": 9,
   "image": "this.AnimatedImageResource_42555C08_55A6_3C14_41CF_E94B299F8108",
   "pitch": 0.81,
   "yaw": 31.62,
   "class": "HotspotPanoramaOverlayImage",
   "distance": 100
  }
 ],
 "useHandCursor": true,
 "areas": [
  {
   "click": "this.mainPlayList.set('selectedIndex', 5)",
   "mapColor": "#FF0000",
   "class": "HotspotPanoramaOverlayArea"
  }
 ],
 "id": "overlay_42D18B9C_55AE_2433_41D2_08A9B5C60272",
 "data": {
  "label": "Circle Point 01"
 },
 "class": "HotspotPanoramaOverlay",
 "maps": [
  {
   "hfov": 9,
   "yaw": 31.62,
   "class": "HotspotPanoramaOverlayMap",
   "pitch": 0.81,
   "image": {
    "class": "ImageResource",
    "levels": [
     {
      "url": "media/panorama_5F002981_559A_2414_41B3_6BC2B132EDF2_1_HS_3_0_0_map.gif",
      "width": 16,
      "class": "ImageResourceLevel",
      "height": 16
     }
    ]
   }
  }
 ]
},
{
 "enabledInCardboard": true,
 "rollOverDisplay": false,
 "items": [
  {
   "hfov": 9,
   "image": "this.AnimatedImageResource_42551C08_55A6_3C14_41D4_E70864CA423C",
   "pitch": 0.83,
   "yaw": 14.39,
   "class": "HotspotPanoramaOverlayImage",
   "distance": 100
  }
 ],
 "useHandCursor": true,
 "areas": [
  {
   "click": "this.mainPlayList.set('selectedIndex', 7)",
   "mapColor": "#FF0000",
   "class": "HotspotPanoramaOverlayArea"
  }
 ],
 "id": "overlay_42F57151_55AA_2434_4151_3DF00CC63B9A",
 "data": {
  "label": "Circle Point 01"
 },
 "class": "HotspotPanoramaOverlay",
 "maps": [
  {
   "hfov": 9,
   "yaw": 14.39,
   "class": "HotspotPanoramaOverlayMap",
   "pitch": 0.83,
   "image": {
    "class": "ImageResource",
    "levels": [
     {
      "url": "media/panorama_5F002981_559A_2414_41B3_6BC2B132EDF2_1_HS_4_0_0_map.gif",
      "width": 16,
      "class": "ImageResourceLevel",
      "height": 16
     }
    ]
   }
  }
 ]
},
{
 "data": {
  "name": "button menu sup"
 },
 "children": [
  "this.IconButton_532DE206_5D2D_2DE0_41C0_63138AFD6207"
 ],
 "paddingLeft": 0,
 "scrollBarColor": "#000000",
 "id": "Container_532DC206_5D2D_2DE7_41BD_A86E3780D7AB",
 "class": "Container",
 "right": "0%",
 "width": 110,
 "paddingRight": 0,
 "borderSize": 0,
 "scrollBarVisible": "rollOver",
 "minHeight": 1,
 "scrollBarOpacity": 0.5,
 "scrollBarMargin": 2,
 "contentOpaque": false,
 "minWidth": 1,
 "verticalAlign": "middle",
 "height": 110,
 "top": "0%",
 "layout": "horizontal",
 "paddingTop": 0,
 "backgroundOpacity": 0,
 "borderRadius": 0,
 "gap": 10,
 "paddingBottom": 0,
 "shadow": false,
 "scrollBarWidth": 10,
 "propagateClick": true,
 "overflow": "visible",
 "horizontalAlign": "center"
},
{
 "data": {
  "name": "-button set"
 },
 "children": [
  "this.IconButton_532E020B_5D2D_2DED_41D3_4EC3326FFF7E",
  "this.IconButton_532E320B_5D2D_2DED_41C2_0771F0A3CFDB",
  "this.IconButton_532E520B_5D2D_2DED_41D4_B703E0AAEDE8",
  "this.IconButton_532E720B_5D2D_2DED_41CA_40FB0C117DE4"
 ],
 "paddingLeft": 0,
 "scrollBarColor": "#000000",
 "id": "Container_532E120B_5D2D_2DED_41D0_8FDED70A663E",
 "class": "Container",
 "right": "0%",
 "scrollBarOpacity": 0.5,
 "paddingRight": 0,
 "borderSize": 0,
 "scrollBarVisible": "rollOver",
 "minHeight": 1,
 "width": "91.304%",
 "bottom": "0%",
 "contentOpaque": false,
 "minWidth": 1,
 "scrollBarMargin": 2,
 "verticalAlign": "top",
 "height": "85.959%",
 "layout": "vertical",
 "paddingTop": 0,
 "backgroundOpacity": 0,
 "borderRadius": 0,
 "gap": 3,
 "paddingBottom": 0,
 "shadow": false,
 "visible": false,
 "scrollBarWidth": 10,
 "propagateClick": true,
 "overflow": "scroll",
 "horizontalAlign": "center"
},
{
 "rowCount": 6,
 "frameCount": 24,
 "class": "AnimatedImageResource",
 "colCount": 4,
 "id": "AnimatedImageResource_425E1C05_55A6_3C1C_41D2_4DD84B23422F",
 "frameDuration": 41,
 "levels": [
  {
   "url": "media/panorama_5FE2FE4F_559B_FC2C_41A4_BE2E6B3732EE_1_HS_0_0.png",
   "width": 1200,
   "class": "ImageResourceLevel",
   "height": 1800
  }
 ]
},
{
 "rowCount": 6,
 "frameCount": 24,
 "class": "AnimatedImageResource",
 "colCount": 4,
 "id": "AnimatedImageResource_425EEC05_55A6_3C1C_41C2_2C856F5CFD41",
 "frameDuration": 41,
 "levels": [
  {
   "url": "media/panorama_5FE2FE4F_559B_FC2C_41A4_BE2E6B3732EE_1_HS_1_0.png",
   "width": 1200,
   "class": "ImageResourceLevel",
   "height": 1800
  }
 ]
},
{
 "rowCount": 6,
 "frameCount": 24,
 "class": "AnimatedImageResource",
 "colCount": 4,
 "id": "AnimatedImageResource_425E9C05_55A6_3C1C_41D2_85A2E5177F64",
 "frameDuration": 41,
 "levels": [
  {
   "url": "media/panorama_5FE2FE4F_559B_FC2C_41A4_BE2E6B3732EE_1_HS_2_0.png",
   "width": 1200,
   "class": "ImageResourceLevel",
   "height": 1800
  }
 ]
},
{
 "rowCount": 6,
 "frameCount": 24,
 "class": "AnimatedImageResource",
 "colCount": 4,
 "id": "AnimatedImageResource_425E4C05_55A6_3C1C_41D1_355DE7CE2471",
 "frameDuration": 41,
 "levels": [
  {
   "url": "media/panorama_5FE12600_559B_EC14_41D4_D4C725CB8C27_1_HS_0_0.png",
   "width": 1200,
   "class": "ImageResourceLevel",
   "height": 1800
  }
 ]
},
{
 "rowCount": 6,
 "frameCount": 24,
 "class": "AnimatedImageResource",
 "colCount": 4,
 "id": "AnimatedImageResource_425F9C05_55A6_3C1C_41D0_B944A9A02F9D",
 "frameDuration": 41,
 "levels": [
  {
   "url": "media/panorama_5FF0D766_559A_2C1F_41AB_512BD6518694_1_HS_0_0.png",
   "width": 1200,
   "class": "ImageResourceLevel",
   "height": 1800
  }
 ]
},
{
 "rowCount": 6,
 "frameCount": 24,
 "class": "AnimatedImageResource",
 "colCount": 4,
 "id": "AnimatedImageResource_425E6C05_55A6_3C1C_41D2_159594C9986C",
 "frameDuration": 41,
 "levels": [
  {
   "url": "media/panorama_5FF0D766_559A_2C1F_41AB_512BD6518694_1_HS_1_0.png",
   "width": 1200,
   "class": "ImageResourceLevel",
   "height": 1800
  }
 ]
},
{
 "rowCount": 6,
 "frameCount": 24,
 "class": "AnimatedImageResource",
 "colCount": 4,
 "id": "AnimatedImageResource_42514C05_55A6_3C1C_41C0_FFD5B70289E9",
 "frameDuration": 41,
 "levels": [
  {
   "url": "media/panorama_5F183A9A_559B_E437_419D_074434E00356_1_HS_0_0.png",
   "width": 1200,
   "class": "ImageResourceLevel",
   "height": 1800
  }
 ]
},
{
 "rowCount": 6,
 "frameCount": 24,
 "class": "AnimatedImageResource",
 "colCount": 4,
 "id": "AnimatedImageResource_42516C05_55A6_3C1C_41BB_7EAAE595B93D",
 "frameDuration": 41,
 "levels": [
  {
   "url": "media/panorama_5F183A9A_559B_E437_419D_074434E00356_1_HS_1_0.png",
   "width": 1200,
   "class": "ImageResourceLevel",
   "height": 1800
  }
 ]
},
{
 "rowCount": 6,
 "frameCount": 24,
 "class": "AnimatedImageResource",
 "colCount": 4,
 "id": "AnimatedImageResource_4251CC05_55A6_3C1C_41A0_38CE3B8373B6",
 "frameDuration": 41,
 "levels": [
  {
   "url": "media/panorama_5F183A9A_559B_E437_419D_074434E00356_1_HS_2_0.png",
   "width": 1200,
   "class": "ImageResourceLevel",
   "height": 1800
  }
 ]
},
{
 "rowCount": 6,
 "frameCount": 24,
 "class": "AnimatedImageResource",
 "colCount": 4,
 "id": "AnimatedImageResource_425CCC04_55A6_3C1C_4197_C8DA9456F7EC",
 "frameDuration": 41,
 "levels": [
  {
   "url": "media/panorama_5FFE73AF_559A_246D_41BE_6C970F53DC32_1_HS_0_0.png",
   "width": 1200,
   "class": "ImageResourceLevel",
   "height": 1800
  }
 ]
},
{
 "rowCount": 6,
 "frameCount": 24,
 "class": "AnimatedImageResource",
 "colCount": 4,
 "id": "AnimatedImageResource_425CFC04_55A6_3C1C_41C5_83DF60608137",
 "frameDuration": 41,
 "levels": [
  {
   "url": "media/panorama_5FFE73AF_559A_246D_41BE_6C970F53DC32_1_HS_1_0.png",
   "width": 1200,
   "class": "ImageResourceLevel",
   "height": 1800
  }
 ]
},
{
 "rowCount": 6,
 "frameCount": 24,
 "class": "AnimatedImageResource",
 "colCount": 4,
 "id": "AnimatedImageResource_425CAC04_55A6_3C1C_41C3_D8E955947019",
 "frameDuration": 41,
 "levels": [
  {
   "url": "media/panorama_5FFE73AF_559A_246D_41BE_6C970F53DC32_1_HS_2_0.png",
   "width": 1200,
   "class": "ImageResourceLevel",
   "height": 1800
  }
 ]
},
{
 "rowCount": 6,
 "frameCount": 24,
 "class": "AnimatedImageResource",
 "colCount": 4,
 "id": "AnimatedImageResource_425DAC04_55A6_3C1C_41BA_C9C48781A183",
 "frameDuration": 41,
 "levels": [
  {
   "url": "media/panorama_5FE05EA7_559B_DC1C_41CC_82457BE41622_1_HS_0_0.png",
   "width": 1200,
   "class": "ImageResourceLevel",
   "height": 1800
  }
 ]
},
{
 "rowCount": 6,
 "frameCount": 24,
 "class": "AnimatedImageResource",
 "colCount": 4,
 "id": "AnimatedImageResource_425C0C04_55A6_3C1C_41A2_1E0D819F2EAC",
 "frameDuration": 41,
 "levels": [
  {
   "url": "media/panorama_5FE05EA7_559B_DC1C_41CC_82457BE41622_1_HS_1_0.png",
   "width": 1200,
   "class": "ImageResourceLevel",
   "height": 1800
  }
 ]
},
{
 "rowCount": 6,
 "frameCount": 24,
 "class": "AnimatedImageResource",
 "colCount": 4,
 "id": "AnimatedImageResource_42506C07_55A6_3C1C_41CE_3C4FE596E9DE",
 "frameDuration": 41,
 "levels": [
  {
   "url": "media/panorama_5FE3FFC1_559A_3C14_41B6_9D6FB711FAE1_1_HS_0_0.png",
   "width": 1200,
   "class": "ImageResourceLevel",
   "height": 1800
  }
 ]
},
{
 "rowCount": 6,
 "frameCount": 24,
 "class": "AnimatedImageResource",
 "colCount": 4,
 "id": "AnimatedImageResource_42503C07_55A6_3C1C_41C6_BD600A756189",
 "frameDuration": 41,
 "levels": [
  {
   "url": "media/panorama_5FE3FFC1_559A_3C14_41B6_9D6FB711FAE1_1_HS_1_0.png",
   "width": 1200,
   "class": "ImageResourceLevel",
   "height": 1800
  }
 ]
},
{
 "rowCount": 6,
 "frameCount": 24,
 "class": "AnimatedImageResource",
 "colCount": 4,
 "id": "AnimatedImageResource_4250EC07_55A6_3C1C_41D1_ECADB4FC89DD",
 "frameDuration": 41,
 "levels": [
  {
   "url": "media/panorama_5FE3FFC1_559A_3C14_41B6_9D6FB711FAE1_1_HS_2_0.png",
   "width": 1200,
   "class": "ImageResourceLevel",
   "height": 1800
  }
 ]
},
{
 "rowCount": 6,
 "frameCount": 24,
 "class": "AnimatedImageResource",
 "colCount": 4,
 "id": "AnimatedImageResource_4250BC07_55A6_3C1C_41D0_DC0EB148ABE7",
 "frameDuration": 41,
 "levels": [
  {
   "url": "media/panorama_5FE3FFC1_559A_3C14_41B6_9D6FB711FAE1_1_HS_3_0.png",
   "width": 1200,
   "class": "ImageResourceLevel",
   "height": 1800
  }
 ]
},
{
 "rowCount": 6,
 "frameCount": 24,
 "class": "AnimatedImageResource",
 "colCount": 4,
 "id": "AnimatedImageResource_425F6C04_55A6_3C1C_41AA_B29F414DDA50",
 "frameDuration": 41,
 "levels": [
  {
   "url": "media/panorama_5FF43B4B_559A_2414_41A8_7B6F9A305344_1_HS_0_0.png",
   "width": 1200,
   "class": "ImageResourceLevel",
   "height": 1800
  }
 ]
},
{
 "rowCount": 6,
 "frameCount": 24,
 "class": "AnimatedImageResource",
 "colCount": 4,
 "id": "AnimatedImageResource_425F1C05_55A6_3C1C_41B6_3D2EE92132E8",
 "frameDuration": 41,
 "levels": [
  {
   "url": "media/panorama_5FF43B4B_559A_2414_41A8_7B6F9A305344_1_HS_1_0.png",
   "width": 1200,
   "class": "ImageResourceLevel",
   "height": 1800
  }
 ]
},
{
 "rowCount": 6,
 "frameCount": 24,
 "class": "AnimatedImageResource",
 "colCount": 4,
 "id": "AnimatedImageResource_425FEC05_55A6_3C1C_41BF_814EC7D1019A",
 "frameDuration": 41,
 "levels": [
  {
   "url": "media/panorama_5FF43B4B_559A_2414_41A8_7B6F9A305344_1_HS_2_0.png",
   "width": 1200,
   "class": "ImageResourceLevel",
   "height": 1800
  }
 ]
},
{
 "rowCount": 6,
 "frameCount": 24,
 "class": "AnimatedImageResource",
 "colCount": 4,
 "id": "AnimatedImageResource_4251FC05_55A6_3C1C_41CF_2575B23F42E8",
 "frameDuration": 41,
 "levels": [
  {
   "url": "media/panorama_5FA20A5E_559B_E42C_41C0_6982281411A6_1_HS_0_0.png",
   "width": 1200,
   "class": "ImageResourceLevel",
   "height": 1800
  }
 ]
},
{
 "rowCount": 6,
 "frameCount": 24,
 "class": "AnimatedImageResource",
 "colCount": 4,
 "id": "AnimatedImageResource_4251BC05_55A6_3C1C_41D0_3F232CB6EA9D",
 "frameDuration": 41,
 "levels": [
  {
   "url": "media/panorama_5FA20A5E_559B_E42C_41C0_6982281411A6_1_HS_1_0.png",
   "width": 1200,
   "class": "ImageResourceLevel",
   "height": 1800
  }
 ]
},
{
 "rowCount": 6,
 "frameCount": 24,
 "class": "AnimatedImageResource",
 "colCount": 4,
 "id": "AnimatedImageResource_425FCC05_55A6_3C1C_41CC_F4C7656E85DD",
 "frameDuration": 41,
 "levels": [
  {
   "url": "media/panorama_5FEFC24C_559B_E42C_41CF_0F1C7C7C96B3_1_HS_0_0.png",
   "width": 1200,
   "class": "ImageResourceLevel",
   "height": 1800
  }
 ]
},
{
 "rowCount": 6,
 "frameCount": 24,
 "class": "AnimatedImageResource",
 "colCount": 4,
 "id": "AnimatedImageResource_425F8C05_55A6_3C1C_41C4_229751011FCF",
 "frameDuration": 41,
 "levels": [
  {
   "url": "media/panorama_5FEFC24C_559B_E42C_41CF_0F1C7C7C96B3_1_HS_1_0.png",
   "width": 1200,
   "class": "ImageResourceLevel",
   "height": 1800
  }
 ]
},
{
 "rowCount": 6,
 "frameCount": 24,
 "class": "AnimatedImageResource",
 "colCount": 4,
 "id": "AnimatedImageResource_425E7C05_55A6_3C1C_41C5_68947F7930DF",
 "frameDuration": 41,
 "levels": [
  {
   "url": "media/panorama_5FEE165D_559B_EC2D_41C4_63B135524787_1_HS_0_0.png",
   "width": 1200,
   "class": "ImageResourceLevel",
   "height": 1800
  }
 ]
},
{
 "rowCount": 6,
 "frameCount": 24,
 "class": "AnimatedImageResource",
 "colCount": 4,
 "id": "AnimatedImageResource_425E3C05_55A6_3C1C_41C7_C887B0F57CC5",
 "frameDuration": 41,
 "levels": [
  {
   "url": "media/panorama_5FEE165D_559B_EC2D_41C4_63B135524787_1_HS_1_0.png",
   "width": 1200,
   "class": "ImageResourceLevel",
   "height": 1800
  }
 ]
},
{
 "rowCount": 6,
 "frameCount": 24,
 "class": "AnimatedImageResource",
 "colCount": 4,
 "id": "AnimatedImageResource_425EFC05_55A6_3C1C_41C7_ADBCF73F1794",
 "frameDuration": 41,
 "levels": [
  {
   "url": "media/panorama_5FEE165D_559B_EC2D_41C4_63B135524787_1_HS_2_0.png",
   "width": 1200,
   "class": "ImageResourceLevel",
   "height": 1800
  }
 ]
},
{
 "rowCount": 6,
 "frameCount": 24,
 "class": "AnimatedImageResource",
 "colCount": 4,
 "id": "AnimatedImageResource_42530C07_55A6_3C1C_41C5_B48933B0DAC3",
 "frameDuration": 41,
 "levels": [
  {
   "url": "media/panorama_5F0C14DA_559A_2C34_41D1_B39A1CA2ED2D_1_HS_0_0.png",
   "width": 1200,
   "class": "ImageResourceLevel",
   "height": 1800
  }
 ]
},
{
 "rowCount": 6,
 "frameCount": 24,
 "class": "AnimatedImageResource",
 "colCount": 4,
 "id": "AnimatedImageResource_42533C07_55A6_3C1C_41B3_76FF051E60FA",
 "frameDuration": 41,
 "levels": [
  {
   "url": "media/panorama_5F0C14DA_559A_2C34_41D1_B39A1CA2ED2D_1_HS_1_0.png",
   "width": 1200,
   "class": "ImageResourceLevel",
   "height": 1800
  }
 ]
},
{
 "rowCount": 6,
 "frameCount": 24,
 "class": "AnimatedImageResource",
 "colCount": 4,
 "id": "AnimatedImageResource_4253FC07_55A6_3C1C_41B7_3D13C3B3046C",
 "frameDuration": 41,
 "levels": [
  {
   "url": "media/panorama_5F0C14DA_559A_2C34_41D1_B39A1CA2ED2D_1_HS_2_0.png",
   "width": 1200,
   "class": "ImageResourceLevel",
   "height": 1800
  }
 ]
},
{
 "rowCount": 6,
 "frameCount": 24,
 "class": "AnimatedImageResource",
 "colCount": 4,
 "id": "AnimatedImageResource_4253AC07_55A6_3C1C_4188_0E3F5B92775D",
 "frameDuration": 41,
 "levels": [
  {
   "url": "media/panorama_5F0C14DA_559A_2C34_41D1_B39A1CA2ED2D_1_HS_3_0.png",
   "width": 1200,
   "class": "ImageResourceLevel",
   "height": 1800
  }
 ]
},
{
 "rowCount": 6,
 "frameCount": 24,
 "class": "AnimatedImageResource",
 "colCount": 4,
 "id": "AnimatedImageResource_42527C07_55A6_3C1C_4196_C98234EE9809",
 "frameDuration": 41,
 "levels": [
  {
   "url": "media/panorama_5F002981_559A_2414_41B3_6BC2B132EDF2_1_HS_0_0.png",
   "width": 1200,
   "class": "ImageResourceLevel",
   "height": 1800
  }
 ]
},
{
 "rowCount": 6,
 "frameCount": 24,
 "class": "AnimatedImageResource",
 "colCount": 4,
 "id": "AnimatedImageResource_42522C07_55A6_3C1C_418C_2052FEC127CB",
 "frameDuration": 41,
 "levels": [
  {
   "url": "media/panorama_5F002981_559A_2414_41B3_6BC2B132EDF2_1_HS_1_0.png",
   "width": 1200,
   "class": "ImageResourceLevel",
   "height": 1800
  }
 ]
},
{
 "rowCount": 6,
 "frameCount": 24,
 "class": "AnimatedImageResource",
 "colCount": 4,
 "id": "AnimatedImageResource_4252FC07_55A6_3C1C_41CB_5CCC81E75F53",
 "frameDuration": 41,
 "levels": [
  {
   "url": "media/panorama_5F002981_559A_2414_41B3_6BC2B132EDF2_1_HS_2_0.png",
   "width": 1200,
   "class": "ImageResourceLevel",
   "height": 1800
  }
 ]
},
{
 "rowCount": 6,
 "frameCount": 24,
 "class": "AnimatedImageResource",
 "colCount": 4,
 "id": "AnimatedImageResource_42555C08_55A6_3C14_41CF_E94B299F8108",
 "frameDuration": 41,
 "levels": [
  {
   "url": "media/panorama_5F002981_559A_2414_41B3_6BC2B132EDF2_1_HS_3_0.png",
   "width": 1200,
   "class": "ImageResourceLevel",
   "height": 1800
  }
 ]
},
{
 "rowCount": 6,
 "frameCount": 24,
 "class": "AnimatedImageResource",
 "colCount": 4,
 "id": "AnimatedImageResource_42551C08_55A6_3C14_41D4_E70864CA423C",
 "frameDuration": 41,
 "levels": [
  {
   "url": "media/panorama_5F002981_559A_2414_41B3_6BC2B132EDF2_1_HS_4_0.png",
   "width": 1200,
   "class": "ImageResourceLevel",
   "height": 1800
  }
 ]
},
{
 "maxHeight": 60,
 "maxWidth": 60,
 "paddingLeft": 0,
 "id": "IconButton_532DE206_5D2D_2DE0_41C0_63138AFD6207",
 "class": "IconButton",
 "width": 60,
 "paddingRight": 0,
 "borderSize": 0,
 "transparencyActive": true,
 "minHeight": 1,
 "iconURL": "skin/IconButton_532DE206_5D2D_2DE0_41C0_63138AFD6207.png",
 "verticalAlign": "middle",
 "minWidth": 1,
 "mode": "toggle",
 "height": 60,
 "click": "if(!this.Container_532E120B_5D2D_2DED_41D0_8FDED70A663E.get('visible')){ this.setComponentVisibility(this.Container_532E120B_5D2D_2DED_41D0_8FDED70A663E, true, 0, null, null, false) } else { this.setComponentVisibility(this.Container_532E120B_5D2D_2DED_41D0_8FDED70A663E, false, 0, null, null, false) }",
 "paddingTop": 0,
 "pressedRollOverIconURL": "skin/IconButton_532DE206_5D2D_2DE0_41C0_63138AFD6207_pressed_rollover.png",
 "backgroundOpacity": 0,
 "borderRadius": 0,
 "paddingBottom": 0,
 "shadow": false,
 "pressedIconURL": "skin/IconButton_532DE206_5D2D_2DE0_41C0_63138AFD6207_pressed.png",
 "cursor": "hand",
 "propagateClick": true,
 "data": {
  "name": "image button menu"
 },
 "horizontalAlign": "center"
}],
 "start": "this.init(); this.visibleComponentsIfPlayerFlagEnabled([this.IconButton_532E320B_5D2D_2DED_41C2_0771F0A3CFDB], 'gyroscopeAvailable'); this.syncPlaylists([this.ThumbnailList_519315CD_5D2D_5665_41C2_83700ED94704_playlist,this.mainPlayList]); if(!this.get('fullscreenAvailable')) { [this.IconButton_532E720B_5D2D_2DED_41CA_40FB0C117DE4].forEach(function(component) { component.set('visible', false); }) }",
 "data": {
  "name": "Player485"
 },
 "children": [
  "this.MainViewer",
  "this.ThumbnailList_519315CD_5D2D_5665_41C2_83700ED94704",
  "this.Container_532EA20B_5D2D_2DED_4199_DB6E156EB8FC"
 ],
 "id": "rootPlayer",
 "mobileMipmappingEnabled": false,
 "vrPolyfillScale": 0.5,
 "paddingLeft": 0,
 "scrollBarColor": "#000000",
 "paddingRight": 0,
 "class": "Player",
 "scrollBarOpacity": 0.5,
 "scrollBarVisible": "rollOver",
 "minHeight": 20,
 "backgroundPreloadEnabled": true,
 "width": "100%",
 "desktopMipmappingEnabled": false,
 "borderSize": 0,
 "buttonToggleFullscreen": "this.IconButton_532E720B_5D2D_2DED_41CA_40FB0C117DE4",
 "scripts": {
  "isCardboardViewMode": function(){  var players = this.getByClassName('PanoramaPlayer'); return players.length > 0 && players[0].get('viewMode') == 'cardboard'; },
  "getMediaWidth": function(media){  switch(media.get('class')){ case 'Video360': var res = media.get('video'); if(res instanceof Array){ var maxW=0; for(var i=0; i<res.length; i++){ var r = res[i]; if(r.get('width') > maxW) maxW = r.get('width'); } return maxW; }else{ return r.get('width') } default: return media.get('width'); } },
  "setMapLocation": function(panoramaPlayListItem, mapPlayer){  var resetFunction = function(){ panoramaPlayListItem.unbind('stop', resetFunction, this); player.set('mapPlayer', null); }; panoramaPlayListItem.bind('stop', resetFunction, this); var player = panoramaPlayListItem.get('player'); player.set('mapPlayer', mapPlayer); },
  "getActivePlayerWithViewer": function(viewerArea){  var players = this.getByClassName('PanoramaPlayer'); players = players.concat(this.getByClassName('VideoPlayer')); players = players.concat(this.getByClassName('Video360Player')); players = players.concat(this.getByClassName('PhotoAlbumPlayer')); players = players.concat(this.getByClassName('MapPlayer')); var i = players.length; while(i-- > 0){ var player = players[i]; if(player.get('viewerArea') == viewerArea) { var playerClass = player.get('class'); if(playerClass == 'PanoramaPlayer' && (player.get('panorama') != undefined || player.get('video') != undefined)) return player; else if((playerClass == 'VideoPlayer' || playerClass == 'Video360Player') && player.get('video') != undefined) return player; else if(playerClass == 'PhotoAlbumPlayer' && player.get('photoAlbum') != undefined) return player; else if(playerClass == 'MapPlayer' && player.get('map') != undefined) return player; } } return undefined; },
  "getPanoramaOverlayByName": function(panorama, name){  var overlays = this.getOverlays(panorama); for(var i = 0, count = overlays.length; i<count; ++i){ var overlay = overlays[i]; var data = overlay.get('data'); if(data != undefined && data.label == name){ return overlay; } } return undefined; },
  "updateVideoCues": function(playList, index){  var playListItem = playList.get('items')[index]; var video = playListItem.get('media'); if(video.get('cues').length == 0) return; var player = playListItem.get('player'); var cues = []; var changeFunction = function(){ if(playList.get('selectedIndex') != index){ video.unbind('cueChange', cueChangeFunction, this); playList.unbind('change', changeFunction, this); } }; var cueChangeFunction = function(event){ var activeCues = event.data.activeCues; for(var i = 0, count = cues.length; i<count; ++i){ var cue = cues[i]; if(activeCues.indexOf(cue) == -1 && (cue.get('startTime') > player.get('currentTime') || cue.get('endTime') < player.get('currentTime')+0.5)){ cue.trigger('end'); } } cues = activeCues; }; video.bind('cueChange', cueChangeFunction, this); playList.bind('change', changeFunction, this); },
  "setPanoramaCameraWithCurrentSpot": function(playListItem){  var currentPlayer = this.getActivePlayerWithViewer(this.MainViewer); if(currentPlayer == undefined){ return; } var playerClass = currentPlayer.get('class'); if(playerClass != 'PanoramaPlayer' && playerClass != 'Video360Player'){ return; } var fromMedia = currentPlayer.get('panorama'); if(fromMedia == undefined) { fromMedia = currentPlayer.get('video'); } var panorama = playListItem.get('media'); var newCamera = this.cloneCamera(playListItem.get('camera')); this.setCameraSameSpotAsMedia(newCamera, fromMedia); this.startPanoramaWithCamera(panorama, newCamera); },
  "historyGoBack": function(playList){  var history = this.get('data')['history'][playList.get('id')]; if(history != undefined) { history.back(); } },
  "openLink": function(url, name){  if(url == location.href) { return; } var isElectron = (window && window.process && window.process.versions && window.process.versions['electron']) || (navigator && navigator.userAgent && navigator.userAgent.indexOf('Electron') >= 0); if (name == '_blank' && isElectron) { if (url.startsWith('/')) { var r = window.location.href.split('/'); r.pop(); url = r.join('/') + url; } var extension = url.split('.').pop().toLowerCase(); if(extension != 'pdf' || url.startsWith('file://')) { var shell = window.require('electron').shell; shell.openExternal(url); } else { window.open(url, name); } } else if(isElectron && (name == '_top' || name == '_self')) { window.location = url; } else { var newWindow = window.open(url, name); newWindow.focus(); } },
  "setOverlayBehaviour": function(overlay, media, action){  var executeFunc = function() { switch(action){ case 'triggerClick': this.triggerOverlay(overlay, 'click'); break; case 'stop': case 'play': case 'pause': overlay[action](); break; case 'togglePlayPause': case 'togglePlayStop': if(overlay.get('state') == 'playing') overlay[action == 'togglePlayPause' ? 'pause' : 'stop'](); else overlay.play(); break; } if(window.overlaysDispatched == undefined) window.overlaysDispatched = {}; var id = overlay.get('id'); window.overlaysDispatched[id] = true; setTimeout(function(){ delete window.overlaysDispatched[id]; }, 2000); }; if(window.overlaysDispatched != undefined && overlay.get('id') in window.overlaysDispatched) return; var playList = this.getPlayListWithMedia(media, true); if(playList != undefined){ var item = this.getPlayListItemByMedia(playList, media); if(playList.get('items').indexOf(item) != playList.get('selectedIndex')){ var beginFunc = function(e){ item.unbind('begin', beginFunc, this); executeFunc.call(this); }; item.bind('begin', beginFunc, this); return; } } executeFunc.call(this); },
  "getOverlays": function(media){  switch(media.get('class')){ case 'Panorama': var overlays = media.get('overlays').concat() || []; var frames = media.get('frames'); for(var j = 0; j<frames.length; ++j){ overlays = overlays.concat(frames[j].get('overlays') || []); } return overlays; case 'Video360': case 'Map': return media.get('overlays') || []; default: return []; } },
  "showPopupPanoramaOverlay": function(popupPanoramaOverlay, closeButtonProperties, imageHD, toggleImage, toggleImageHD, autoCloseMilliSeconds, audio, stopBackgroundAudio){  var self = this; this.MainViewer.set('toolTipEnabled', false); var cardboardEnabled = this.isCardboardViewMode(); if(!cardboardEnabled) { var zoomImage = this.zoomImagePopupPanorama; var showDuration = popupPanoramaOverlay.get('showDuration'); var hideDuration = popupPanoramaOverlay.get('hideDuration'); var playersPaused = this.pauseCurrentPlayers(audio == null || !stopBackgroundAudio); var popupMaxWidthBackup = popupPanoramaOverlay.get('popupMaxWidth'); var popupMaxHeightBackup = popupPanoramaOverlay.get('popupMaxHeight'); var showEndFunction = function() { var loadedFunction = function(){ if(!self.isCardboardViewMode()) popupPanoramaOverlay.set('visible', false); }; popupPanoramaOverlay.unbind('showEnd', showEndFunction, self); popupPanoramaOverlay.set('showDuration', 1); popupPanoramaOverlay.set('hideDuration', 1); self.showPopupImage(imageHD, toggleImageHD, popupPanoramaOverlay.get('popupMaxWidth'), popupPanoramaOverlay.get('popupMaxHeight'), null, null, closeButtonProperties, autoCloseMilliSeconds, audio, stopBackgroundAudio, loadedFunction, hideFunction); }; var hideFunction = function() { var restoreShowDurationFunction = function(){ popupPanoramaOverlay.unbind('showEnd', restoreShowDurationFunction, self); popupPanoramaOverlay.set('visible', false); popupPanoramaOverlay.set('showDuration', showDuration); popupPanoramaOverlay.set('popupMaxWidth', popupMaxWidthBackup); popupPanoramaOverlay.set('popupMaxHeight', popupMaxHeightBackup); }; self.resumePlayers(playersPaused, audio == null || !stopBackgroundAudio); var currentWidth = zoomImage.get('imageWidth'); var currentHeight = zoomImage.get('imageHeight'); popupPanoramaOverlay.bind('showEnd', restoreShowDurationFunction, self, true); popupPanoramaOverlay.set('showDuration', 1); popupPanoramaOverlay.set('hideDuration', hideDuration); popupPanoramaOverlay.set('popupMaxWidth', currentWidth); popupPanoramaOverlay.set('popupMaxHeight', currentHeight); if(popupPanoramaOverlay.get('visible')) restoreShowDurationFunction(); else popupPanoramaOverlay.set('visible', true); self.MainViewer.set('toolTipEnabled', true); }; if(!imageHD){ imageHD = popupPanoramaOverlay.get('image'); } if(!toggleImageHD && toggleImage){ toggleImageHD = toggleImage; } popupPanoramaOverlay.bind('showEnd', showEndFunction, this, true); } else { var hideEndFunction = function() { self.resumePlayers(playersPaused, audio == null || stopBackgroundAudio); if(audio){ if(stopBackgroundAudio){ self.resumeGlobalAudios(); } self.stopGlobalAudio(audio); } popupPanoramaOverlay.unbind('hideEnd', hideEndFunction, self); self.MainViewer.set('toolTipEnabled', true); }; var playersPaused = this.pauseCurrentPlayers(audio == null || !stopBackgroundAudio); if(audio){ if(stopBackgroundAudio){ this.pauseGlobalAudios(); } this.playGlobalAudio(audio); } popupPanoramaOverlay.bind('hideEnd', hideEndFunction, this, true); } popupPanoramaOverlay.set('visible', true); },
  "shareWhatsapp": function(url){  window.open('https://api.whatsapp.com/send/?text=' + encodeURIComponent(url), '_blank'); },
  "showPopupPanoramaVideoOverlay": function(popupPanoramaOverlay, closeButtonProperties, stopAudios){  var self = this; var showEndFunction = function() { popupPanoramaOverlay.unbind('showEnd', showEndFunction); closeButton.bind('click', hideFunction, this); setCloseButtonPosition(); closeButton.set('visible', true); }; var endFunction = function() { if(!popupPanoramaOverlay.get('loop')) hideFunction(); }; var hideFunction = function() { self.MainViewer.set('toolTipEnabled', true); popupPanoramaOverlay.set('visible', false); closeButton.set('visible', false); closeButton.unbind('click', hideFunction, self); popupPanoramaOverlay.unbind('end', endFunction, self); popupPanoramaOverlay.unbind('hideEnd', hideFunction, self, true); self.resumePlayers(playersPaused, true); if(stopAudios) { self.resumeGlobalAudios(); } }; var setCloseButtonPosition = function() { var right = 10; var top = 10; closeButton.set('right', right); closeButton.set('top', top); }; this.MainViewer.set('toolTipEnabled', false); var closeButton = this.closeButtonPopupPanorama; if(closeButtonProperties){ for(var key in closeButtonProperties){ closeButton.set(key, closeButtonProperties[key]); } } var playersPaused = this.pauseCurrentPlayers(true); if(stopAudios) { this.pauseGlobalAudios(); } popupPanoramaOverlay.bind('end', endFunction, this, true); popupPanoramaOverlay.bind('showEnd', showEndFunction, this, true); popupPanoramaOverlay.bind('hideEnd', hideFunction, this, true); popupPanoramaOverlay.set('visible', true); },
  "getCurrentPlayers": function(){  var players = this.getByClassName('PanoramaPlayer'); players = players.concat(this.getByClassName('VideoPlayer')); players = players.concat(this.getByClassName('Video360Player')); players = players.concat(this.getByClassName('PhotoAlbumPlayer')); return players; },
  "getComponentByName": function(name){  var list = this.getByClassName('UIComponent'); for(var i = 0, count = list.length; i<count; ++i){ var component = list[i]; var data = component.get('data'); if(data != undefined && data.name == name){ return component; } } return undefined; },
  "executeFunctionWhenChange": function(playList, index, endFunction, changeFunction){  var endObject = undefined; var changePlayListFunction = function(event){ if(event.data.previousSelectedIndex == index){ if(changeFunction) changeFunction.call(this); if(endFunction && endObject) endObject.unbind('end', endFunction, this); playList.unbind('change', changePlayListFunction, this); } }; if(endFunction){ var playListItem = playList.get('items')[index]; if(playListItem.get('class') == 'PanoramaPlayListItem'){ var camera = playListItem.get('camera'); if(camera != undefined) endObject = camera.get('initialSequence'); if(endObject == undefined) endObject = camera.get('idleSequence'); } else{ endObject = playListItem.get('media'); } if(endObject){ endObject.bind('end', endFunction, this); } } playList.bind('change', changePlayListFunction, this); },
  "pauseGlobalAudio": function(audio){  var audios = window.currentGlobalAudios; if(audios){ audio = audios[audio.get('id')]; } if(audio.get('state') == 'playing') audio.pause(); },
  "loadFromCurrentMediaPlayList": function(playList, delta){  var currentIndex = playList.get('selectedIndex'); var totalItems = playList.get('items').length; var newIndex = (currentIndex + delta) % totalItems; while(newIndex < 0){ newIndex = totalItems + newIndex; }; if(currentIndex != newIndex){ playList.set('selectedIndex', newIndex); } },
  "getPlayListItemByMedia": function(playList, media){  var items = playList.get('items'); for(var j = 0, countJ = items.length; j<countJ; ++j){ var item = items[j]; if(item.get('media') == media) return item; } return undefined; },
  "setComponentVisibility": function(component, visible, applyAt, effect, propertyEffect, ignoreClearTimeout){  var keepVisibility = this.getKey('keepVisibility_' + component.get('id')); if(keepVisibility) return; this.unregisterKey('visibility_'+component.get('id')); var changeVisibility = function(){ if(effect && propertyEffect){ component.set(propertyEffect, effect); } component.set('visible', visible); if(component.get('class') == 'ViewerArea'){ try{ if(visible) component.restart(); else if(component.get('playbackState') == 'playing') component.pause(); } catch(e){}; } }; var effectTimeoutName = 'effectTimeout_'+component.get('id'); if(!ignoreClearTimeout && window.hasOwnProperty(effectTimeoutName)){ var effectTimeout = window[effectTimeoutName]; if(effectTimeout instanceof Array){ for(var i=0; i<effectTimeout.length; i++){ clearTimeout(effectTimeout[i]) } }else{ clearTimeout(effectTimeout); } delete window[effectTimeoutName]; } else if(visible == component.get('visible') && !ignoreClearTimeout) return; if(applyAt && applyAt > 0){ var effectTimeout = setTimeout(function(){ if(window[effectTimeoutName] instanceof Array) { var arrayTimeoutVal = window[effectTimeoutName]; var index = arrayTimeoutVal.indexOf(effectTimeout); arrayTimeoutVal.splice(index, 1); if(arrayTimeoutVal.length == 0){ delete window[effectTimeoutName]; } }else{ delete window[effectTimeoutName]; } changeVisibility(); }, applyAt); if(window.hasOwnProperty(effectTimeoutName)){ window[effectTimeoutName] = [window[effectTimeoutName], effectTimeout]; }else{ window[effectTimeoutName] = effectTimeout; } } else{ changeVisibility(); } },
  "playAudioList": function(audios){  if(audios.length == 0) return; var currentAudioCount = -1; var currentAudio; var playGlobalAudioFunction = this.playGlobalAudio; var playNext = function(){ if(++currentAudioCount >= audios.length) currentAudioCount = 0; currentAudio = audios[currentAudioCount]; playGlobalAudioFunction(currentAudio, playNext); }; playNext(); },
  "resumePlayers": function(players, onlyResumeCameraIfPanorama){  for(var i = 0; i<players.length; ++i){ var player = players[i]; if(onlyResumeCameraIfPanorama && player.get('class') == 'PanoramaPlayer' && typeof player.get('video') === 'undefined'){ player.resumeCamera(); } else{ player.play(); } } },
  "getPlayListItems": function(media, player){  var itemClass = (function() { switch(media.get('class')) { case 'Panorama': case 'LivePanorama': case 'HDRPanorama': return 'PanoramaPlayListItem'; case 'Video360': return 'Video360PlayListItem'; case 'PhotoAlbum': return 'PhotoAlbumPlayListItem'; case 'Map': return 'MapPlayListItem'; case 'Video': return 'VideoPlayListItem'; } })(); if (itemClass != undefined) { var items = this.getByClassName(itemClass); for (var i = items.length-1; i>=0; --i) { var item = items[i]; if(item.get('media') != media || (player != undefined && item.get('player') != player)) { items.splice(i, 1); } } return items; } else { return []; } },
  "initGA": function(){  var sendFunc = function(category, event, label) { ga('send', 'event', category, event, label); }; var media = this.getByClassName('Panorama'); media = media.concat(this.getByClassName('Video360')); media = media.concat(this.getByClassName('Map')); for(var i = 0, countI = media.length; i<countI; ++i){ var m = media[i]; var mediaLabel = m.get('label'); var overlays = this.getOverlays(m); for(var j = 0, countJ = overlays.length; j<countJ; ++j){ var overlay = overlays[j]; var overlayLabel = overlay.get('data') != undefined ? mediaLabel + ' - ' + overlay.get('data')['label'] : mediaLabel; switch(overlay.get('class')) { case 'HotspotPanoramaOverlay': case 'HotspotMapOverlay': var areas = overlay.get('areas'); for (var z = 0; z<areas.length; ++z) { areas[z].bind('click', sendFunc.bind(this, 'Hotspot', 'click', overlayLabel), this); } break; case 'CeilingCapPanoramaOverlay': case 'TripodCapPanoramaOverlay': overlay.bind('click', sendFunc.bind(this, 'Cap', 'click', overlayLabel), this); break; } } } var components = this.getByClassName('Button'); components = components.concat(this.getByClassName('IconButton')); for(var i = 0, countI = components.length; i<countI; ++i){ var c = components[i]; var componentLabel = c.get('data')['name']; c.bind('click', sendFunc.bind(this, 'Skin', 'click', componentLabel), this); } var items = this.getByClassName('PlayListItem'); var media2Item = {}; for(var i = 0, countI = items.length; i<countI; ++i) { var item = items[i]; var media = item.get('media'); if(!(media.get('id') in media2Item)) { item.bind('begin', sendFunc.bind(this, 'Media', 'play', media.get('label')), this); media2Item[media.get('id')] = item; } } },
  "changeBackgroundWhilePlay": function(playList, index, color){  var stopFunction = function(event){ playListItem.unbind('stop', stopFunction, this); if((color == viewerArea.get('backgroundColor')) && (colorRatios == viewerArea.get('backgroundColorRatios'))){ viewerArea.set('backgroundColor', backgroundColorBackup); viewerArea.set('backgroundColorRatios', backgroundColorRatiosBackup); } }; var playListItem = playList.get('items')[index]; var player = playListItem.get('player'); var viewerArea = player.get('viewerArea'); var backgroundColorBackup = viewerArea.get('backgroundColor'); var backgroundColorRatiosBackup = viewerArea.get('backgroundColorRatios'); var colorRatios = [0]; if((color != backgroundColorBackup) || (colorRatios != backgroundColorRatiosBackup)){ viewerArea.set('backgroundColor', color); viewerArea.set('backgroundColorRatios', colorRatios); playListItem.bind('stop', stopFunction, this); } },
  "getGlobalAudio": function(audio){  var audios = window.currentGlobalAudios; if(audios != undefined && audio.get('id') in audios){ audio = audios[audio.get('id')]; } return audio; },
  "pauseCurrentPlayers": function(onlyPauseCameraIfPanorama){  var players = this.getCurrentPlayers(); var i = players.length; while(i-- > 0){ var player = players[i]; if(player.get('state') == 'playing') { if(onlyPauseCameraIfPanorama && player.get('class') == 'PanoramaPlayer' && typeof player.get('video') === 'undefined'){ player.pauseCamera(); } else { player.pause(); } } else { players.splice(i, 1); } } return players; },
  "triggerOverlay": function(overlay, eventName){  if(overlay.get('areas') != undefined) { var areas = overlay.get('areas'); for(var i = 0; i<areas.length; ++i) { areas[i].trigger(eventName); } } else { overlay.trigger(eventName); } },
  "unregisterKey": function(key){  delete window[key]; },
  "setMainMediaByName": function(name){  var items = this.mainPlayList.get('items'); for(var i = 0; i<items.length; ++i){ var item = items[i]; if(item.get('media').get('label') == name) { this.mainPlayList.set('selectedIndex', i); return item; } } },
  "getPixels": function(value){  var result = new RegExp('((\\+|\\-)?\\d+(\\.\\d*)?)(px|vw|vh|vmin|vmax)?', 'i').exec(value); if (result == undefined) { return 0; } var num = parseFloat(result[1]); var unit = result[4]; var vw = this.rootPlayer.get('actualWidth') / 100; var vh = this.rootPlayer.get('actualHeight') / 100; switch(unit) { case 'vw': return num * vw; case 'vh': return num * vh; case 'vmin': return num * Math.min(vw, vh); case 'vmax': return num * Math.max(vw, vh); default: return num; } },
  "syncPlaylists": function(playLists){  var changeToMedia = function(media, playListDispatched){ for(var i = 0, count = playLists.length; i<count; ++i){ var playList = playLists[i]; if(playList != playListDispatched){ var items = playList.get('items'); for(var j = 0, countJ = items.length; j<countJ; ++j){ if(items[j].get('media') == media){ if(playList.get('selectedIndex') != j){ playList.set('selectedIndex', j); } break; } } } } }; var changeFunction = function(event){ var playListDispatched = event.source; var selectedIndex = playListDispatched.get('selectedIndex'); if(selectedIndex < 0) return; var media = playListDispatched.get('items')[selectedIndex].get('media'); changeToMedia(media, playListDispatched); }; var mapPlayerChangeFunction = function(event){ var panoramaMapLocation = event.source.get('panoramaMapLocation'); if(panoramaMapLocation){ var map = panoramaMapLocation.get('map'); changeToMedia(map); } }; for(var i = 0, count = playLists.length; i<count; ++i){ playLists[i].bind('change', changeFunction, this); } var mapPlayers = this.getByClassName('MapPlayer'); for(var i = 0, count = mapPlayers.length; i<count; ++i){ mapPlayers[i].bind('panoramaMapLocation_change', mapPlayerChangeFunction, this); } },
  "setCameraSameSpotAsMedia": function(camera, media){  var player = this.getCurrentPlayerWithMedia(media); if(player != undefined) { var position = camera.get('initialPosition'); position.set('yaw', player.get('yaw')); position.set('pitch', player.get('pitch')); position.set('hfov', player.get('hfov')); } },
  "init": function(){  if(!Object.hasOwnProperty('values')) { Object.values = function(o){ return Object.keys(o).map(function(e) { return o[e]; }); }; } var history = this.get('data')['history']; var playListChangeFunc = function(e){ var playList = e.source; var index = playList.get('selectedIndex'); if(index < 0) return; var id = playList.get('id'); if(!history.hasOwnProperty(id)) history[id] = new HistoryData(playList); history[id].add(index); }; var playLists = this.getByClassName('PlayList'); for(var i = 0, count = playLists.length; i<count; ++i) { var playList = playLists[i]; playList.bind('change', playListChangeFunc, this); } },
  "autotriggerAtStart": function(playList, callback, once){  var onChange = function(event){ callback(); if(once == true) playList.unbind('change', onChange, this); }; playList.bind('change', onChange, this); },
  "existsKey": function(key){  return key in window; },
  "stopGlobalAudio": function(audio){  var audios = window.currentGlobalAudios; if(audios){ audio = audios[audio.get('id')]; if(audio){ delete audios[audio.get('id')]; if(Object.keys(audios).length == 0){ window.currentGlobalAudios = undefined; } } } if(audio) audio.stop(); },
  "pauseGlobalAudiosWhilePlayItem": function(playList, index, exclude){  var self = this; var item = playList.get('items')[index]; var media = item.get('media'); var player = item.get('player'); var caller = media.get('id'); var endFunc = function(){ if(playList.get('selectedIndex') != index) { if(hasState){ player.unbind('stateChange', stateChangeFunc, self); } self.resumeGlobalAudios(caller); } }; var stateChangeFunc = function(event){ var state = event.data.state; if(state == 'stopped'){ this.resumeGlobalAudios(caller); } else if(state == 'playing'){ this.pauseGlobalAudios(caller, exclude); } }; var mediaClass = media.get('class'); var hasState = mediaClass == 'Video360' || mediaClass == 'Video'; if(hasState){ player.bind('stateChange', stateChangeFunc, this); } this.pauseGlobalAudios(caller, exclude); this.executeFunctionWhenChange(playList, index, endFunc, endFunc); },
  "getMediaHeight": function(media){  switch(media.get('class')){ case 'Video360': var res = media.get('video'); if(res instanceof Array){ var maxH=0; for(var i=0; i<res.length; i++){ var r = res[i]; if(r.get('height') > maxH) maxH = r.get('height'); } return maxH; }else{ return r.get('height') } default: return media.get('height'); } },
  "showComponentsWhileMouseOver": function(parentComponent, components, durationVisibleWhileOut){  var setVisibility = function(visible){ for(var i = 0, length = components.length; i<length; i++){ var component = components[i]; if(component.get('class') == 'HTMLText' && (component.get('html') == '' || component.get('html') == undefined)) { continue; } component.set('visible', visible); } }; if (this.rootPlayer.get('touchDevice') == true){ setVisibility(true); } else { var timeoutID = -1; var rollOverFunction = function(){ setVisibility(true); if(timeoutID >= 0) clearTimeout(timeoutID); parentComponent.unbind('rollOver', rollOverFunction, this); parentComponent.bind('rollOut', rollOutFunction, this); }; var rollOutFunction = function(){ var timeoutFunction = function(){ setVisibility(false); parentComponent.unbind('rollOver', rollOverFunction, this); }; parentComponent.unbind('rollOut', rollOutFunction, this); parentComponent.bind('rollOver', rollOverFunction, this); timeoutID = setTimeout(timeoutFunction, durationVisibleWhileOut); }; parentComponent.bind('rollOver', rollOverFunction, this); } },
  "resumeGlobalAudios": function(caller){  if (window.pauseGlobalAudiosState == undefined || !(caller in window.pauseGlobalAudiosState)) return; var audiosPaused = window.pauseGlobalAudiosState[caller]; delete window.pauseGlobalAudiosState[caller]; var values = Object.values(window.pauseGlobalAudiosState); for (var i = 0, count = values.length; i<count; ++i) { var objAudios = values[i]; for (var j = audiosPaused.length-1; j>=0; --j) { var a = audiosPaused[j]; if(objAudios.indexOf(a) != -1) audiosPaused.splice(j, 1); } } for (var i = 0, count = audiosPaused.length; i<count; ++i) { var a = audiosPaused[i]; if (a.get('state') == 'paused') a.play(); } },
  "setMediaBehaviour": function(playList, index, mediaDispatcher){  var self = this; var stateChangeFunction = function(event){ if(event.data.state == 'stopped'){ dispose.call(this, true); } }; var onBeginFunction = function() { item.unbind('begin', onBeginFunction, self); var media = item.get('media'); if(media.get('class') != 'Panorama' || (media.get('camera') != undefined && media.get('camera').get('initialSequence') != undefined)){ player.bind('stateChange', stateChangeFunction, self); } }; var changeFunction = function(){ var index = playListDispatcher.get('selectedIndex'); if(index != -1){ indexDispatcher = index; dispose.call(this, false); } }; var disposeCallback = function(){ dispose.call(this, false); }; var dispose = function(forceDispose){ if(!playListDispatcher) return; var media = item.get('media'); if((media.get('class') == 'Video360' || media.get('class') == 'Video') && media.get('loop') == true && !forceDispose) return; playList.set('selectedIndex', -1); if(panoramaSequence && panoramaSequenceIndex != -1){ if(panoramaSequence) { if(panoramaSequenceIndex > 0 && panoramaSequence.get('movements')[panoramaSequenceIndex-1].get('class') == 'TargetPanoramaCameraMovement'){ var initialPosition = camera.get('initialPosition'); var oldYaw = initialPosition.get('yaw'); var oldPitch = initialPosition.get('pitch'); var oldHfov = initialPosition.get('hfov'); var previousMovement = panoramaSequence.get('movements')[panoramaSequenceIndex-1]; initialPosition.set('yaw', previousMovement.get('targetYaw')); initialPosition.set('pitch', previousMovement.get('targetPitch')); initialPosition.set('hfov', previousMovement.get('targetHfov')); var restoreInitialPositionFunction = function(event){ initialPosition.set('yaw', oldYaw); initialPosition.set('pitch', oldPitch); initialPosition.set('hfov', oldHfov); itemDispatcher.unbind('end', restoreInitialPositionFunction, this); }; itemDispatcher.bind('end', restoreInitialPositionFunction, this); } panoramaSequence.set('movementIndex', panoramaSequenceIndex); } } if(player){ item.unbind('begin', onBeginFunction, this); player.unbind('stateChange', stateChangeFunction, this); for(var i = 0; i<buttons.length; ++i) { buttons[i].unbind('click', disposeCallback, this); } } if(sameViewerArea){ var currentMedia = this.getMediaFromPlayer(player); if(currentMedia == undefined || currentMedia == item.get('media')){ playListDispatcher.set('selectedIndex', indexDispatcher); } if(playList != playListDispatcher) playListDispatcher.unbind('change', changeFunction, this); } else{ viewerArea.set('visible', viewerVisibility); } playListDispatcher = undefined; }; var mediaDispatcherByParam = mediaDispatcher != undefined; if(!mediaDispatcher){ var currentIndex = playList.get('selectedIndex'); var currentPlayer = (currentIndex != -1) ? playList.get('items')[playList.get('selectedIndex')].get('player') : this.getActivePlayerWithViewer(this.MainViewer); if(currentPlayer) { mediaDispatcher = this.getMediaFromPlayer(currentPlayer); } } var playListDispatcher = mediaDispatcher ? this.getPlayListWithMedia(mediaDispatcher, true) : undefined; if(!playListDispatcher){ playList.set('selectedIndex', index); return; } var indexDispatcher = playListDispatcher.get('selectedIndex'); if(playList.get('selectedIndex') == index || indexDispatcher == -1){ return; } var item = playList.get('items')[index]; var itemDispatcher = playListDispatcher.get('items')[indexDispatcher]; var player = item.get('player'); var viewerArea = player.get('viewerArea'); var viewerVisibility = viewerArea.get('visible'); var sameViewerArea = viewerArea == itemDispatcher.get('player').get('viewerArea'); if(sameViewerArea){ if(playList != playListDispatcher){ playListDispatcher.set('selectedIndex', -1); playListDispatcher.bind('change', changeFunction, this); } } else{ viewerArea.set('visible', true); } var panoramaSequenceIndex = -1; var panoramaSequence = undefined; var camera = itemDispatcher.get('camera'); if(camera){ panoramaSequence = camera.get('initialSequence'); if(panoramaSequence) { panoramaSequenceIndex = panoramaSequence.get('movementIndex'); } } playList.set('selectedIndex', index); var buttons = []; var addButtons = function(property){ var value = player.get(property); if(value == undefined) return; if(Array.isArray(value)) buttons = buttons.concat(value); else buttons.push(value); }; addButtons('buttonStop'); for(var i = 0; i<buttons.length; ++i) { buttons[i].bind('click', disposeCallback, this); } if(player != itemDispatcher.get('player') || !mediaDispatcherByParam){ item.bind('begin', onBeginFunction, self); } this.executeFunctionWhenChange(playList, index, disposeCallback); },
  "playGlobalAudio": function(audio, endCallback){  var endFunction = function(){ audio.unbind('end', endFunction, this); this.stopGlobalAudio(audio); if(endCallback) endCallback(); }; audio = this.getGlobalAudio(audio); var audios = window.currentGlobalAudios; if(!audios){ audios = window.currentGlobalAudios = {}; } audios[audio.get('id')] = audio; if(audio.get('state') == 'playing'){ return audio; } if(!audio.get('loop')){ audio.bind('end', endFunction, this); } audio.play(); return audio; },
  "updateMediaLabelFromPlayList": function(playList, htmlText, playListItemStopToDispose){  var changeFunction = function(){ var index = playList.get('selectedIndex'); if(index >= 0){ var beginFunction = function(){ playListItem.unbind('begin', beginFunction); setMediaLabel(index); }; var setMediaLabel = function(index){ var media = playListItem.get('media'); var text = media.get('data'); if(!text) text = media.get('label'); setHtml(text); }; var setHtml = function(text){ if(text !== undefined) { htmlText.set('html', '<div style=\"text-align:left\"><SPAN STYLE=\"color:#FFFFFF;font-size:12px;font-family:Verdana\"><span color=\"white\" font-family=\"Verdana\" font-size=\"12px\">' + text + '</SPAN></div>'); } else { htmlText.set('html', ''); } }; var playListItem = playList.get('items')[index]; if(htmlText.get('html')){ setHtml('Loading...'); playListItem.bind('begin', beginFunction); } else{ setMediaLabel(index); } } }; var disposeFunction = function(){ htmlText.set('html', undefined); playList.unbind('change', changeFunction, this); playListItemStopToDispose.unbind('stop', disposeFunction, this); }; if(playListItemStopToDispose){ playListItemStopToDispose.bind('stop', disposeFunction, this); } playList.bind('change', changeFunction, this); changeFunction(); },
  "registerKey": function(key, value){  window[key] = value; },
  "showWindow": function(w, autoCloseMilliSeconds, containsAudio){  if(w.get('visible') == true){ return; } var closeFunction = function(){ clearAutoClose(); this.resumePlayers(playersPaused, !containsAudio); w.unbind('close', closeFunction, this); }; var clearAutoClose = function(){ w.unbind('click', clearAutoClose, this); if(timeoutID != undefined){ clearTimeout(timeoutID); } }; var timeoutID = undefined; if(autoCloseMilliSeconds){ var autoCloseFunction = function(){ w.hide(); }; w.bind('click', clearAutoClose, this); timeoutID = setTimeout(autoCloseFunction, autoCloseMilliSeconds); } var playersPaused = this.pauseCurrentPlayers(!containsAudio); w.bind('close', closeFunction, this); w.show(this, true); },
  "shareFacebook": function(url){  window.open('https://www.facebook.com/sharer/sharer.php?u=' + url, '_blank'); },
  "keepComponentVisibility": function(component, keep){  var key = 'keepVisibility_' + component.get('id'); var value = this.getKey(key); if(value == undefined && keep) { this.registerKey(key, keep); } else if(value != undefined && !keep) { this.unregisterKey(key); } },
  "stopAndGoCamera": function(camera, ms){  var sequence = camera.get('initialSequence'); sequence.pause(); var timeoutFunction = function(){ sequence.play(); }; setTimeout(timeoutFunction, ms); },
  "getMediaFromPlayer": function(player){  switch(player.get('class')){ case 'PanoramaPlayer': return player.get('panorama') || player.get('video'); case 'VideoPlayer': case 'Video360Player': return player.get('video'); case 'PhotoAlbumPlayer': return player.get('photoAlbum'); case 'MapPlayer': return player.get('map'); } },
  "loopAlbum": function(playList, index){  var playListItem = playList.get('items')[index]; var player = playListItem.get('player'); var loopFunction = function(){ player.play(); }; this.executeFunctionWhenChange(playList, index, loopFunction); },
  "showPopupImage": function(image, toggleImage, customWidth, customHeight, showEffect, hideEffect, closeButtonProperties, autoCloseMilliSeconds, audio, stopBackgroundAudio, loadedCallback, hideCallback){  var self = this; var closed = false; var playerClickFunction = function() { zoomImage.unbind('loaded', loadedFunction, self); hideFunction(); }; var clearAutoClose = function(){ zoomImage.unbind('click', clearAutoClose, this); if(timeoutID != undefined){ clearTimeout(timeoutID); } }; var resizeFunction = function(){ setTimeout(setCloseButtonPosition, 0); }; var loadedFunction = function(){ self.unbind('click', playerClickFunction, self); veil.set('visible', true); setCloseButtonPosition(); closeButton.set('visible', true); zoomImage.unbind('loaded', loadedFunction, this); zoomImage.bind('userInteractionStart', userInteractionStartFunction, this); zoomImage.bind('userInteractionEnd', userInteractionEndFunction, this); zoomImage.bind('resize', resizeFunction, this); timeoutID = setTimeout(timeoutFunction, 200); }; var timeoutFunction = function(){ timeoutID = undefined; if(autoCloseMilliSeconds){ var autoCloseFunction = function(){ hideFunction(); }; zoomImage.bind('click', clearAutoClose, this); timeoutID = setTimeout(autoCloseFunction, autoCloseMilliSeconds); } zoomImage.bind('backgroundClick', hideFunction, this); if(toggleImage) { zoomImage.bind('click', toggleFunction, this); zoomImage.set('imageCursor', 'hand'); } closeButton.bind('click', hideFunction, this); if(loadedCallback) loadedCallback(); }; var hideFunction = function() { self.MainViewer.set('toolTipEnabled', true); closed = true; if(timeoutID) clearTimeout(timeoutID); if (timeoutUserInteractionID) clearTimeout(timeoutUserInteractionID); if(autoCloseMilliSeconds) clearAutoClose(); if(hideCallback) hideCallback(); zoomImage.set('visible', false); if(hideEffect && hideEffect.get('duration') > 0){ hideEffect.bind('end', endEffectFunction, this); } else{ zoomImage.set('image', null); } closeButton.set('visible', false); veil.set('visible', false); self.unbind('click', playerClickFunction, self); zoomImage.unbind('backgroundClick', hideFunction, this); zoomImage.unbind('userInteractionStart', userInteractionStartFunction, this); zoomImage.unbind('userInteractionEnd', userInteractionEndFunction, this, true); zoomImage.unbind('resize', resizeFunction, this); if(toggleImage) { zoomImage.unbind('click', toggleFunction, this); zoomImage.set('cursor', 'default'); } closeButton.unbind('click', hideFunction, this); self.resumePlayers(playersPaused, audio == null || stopBackgroundAudio); if(audio){ if(stopBackgroundAudio){ self.resumeGlobalAudios(); } self.stopGlobalAudio(audio); } }; var endEffectFunction = function() { zoomImage.set('image', null); hideEffect.unbind('end', endEffectFunction, this); }; var toggleFunction = function() { zoomImage.set('image', isToggleVisible() ? image : toggleImage); }; var isToggleVisible = function() { return zoomImage.get('image') == toggleImage; }; var setCloseButtonPosition = function() { var right = zoomImage.get('actualWidth') - zoomImage.get('imageLeft') - zoomImage.get('imageWidth') + 10; var top = zoomImage.get('imageTop') + 10; if(right < 10) right = 10; if(top < 10) top = 10; closeButton.set('right', right); closeButton.set('top', top); }; var userInteractionStartFunction = function() { if(timeoutUserInteractionID){ clearTimeout(timeoutUserInteractionID); timeoutUserInteractionID = undefined; } else{ closeButton.set('visible', false); } }; var userInteractionEndFunction = function() { if(!closed){ timeoutUserInteractionID = setTimeout(userInteractionTimeoutFunction, 300); } }; var userInteractionTimeoutFunction = function() { timeoutUserInteractionID = undefined; closeButton.set('visible', true); setCloseButtonPosition(); }; this.MainViewer.set('toolTipEnabled', false); var veil = this.veilPopupPanorama; var zoomImage = this.zoomImagePopupPanorama; var closeButton = this.closeButtonPopupPanorama; if(closeButtonProperties){ for(var key in closeButtonProperties){ closeButton.set(key, closeButtonProperties[key]); } } var playersPaused = this.pauseCurrentPlayers(audio == null || !stopBackgroundAudio); if(audio){ if(stopBackgroundAudio){ this.pauseGlobalAudios(); } this.playGlobalAudio(audio); } var timeoutID = undefined; var timeoutUserInteractionID = undefined; zoomImage.bind('loaded', loadedFunction, this); setTimeout(function(){ self.bind('click', playerClickFunction, self, false); }, 0); zoomImage.set('image', image); zoomImage.set('customWidth', customWidth); zoomImage.set('customHeight', customHeight); zoomImage.set('showEffect', showEffect); zoomImage.set('hideEffect', hideEffect); zoomImage.set('visible', true); return zoomImage; },
  "playGlobalAudioWhilePlay": function(playList, index, audio, endCallback){  var changeFunction = function(event){ if(event.data.previousSelectedIndex == index){ this.stopGlobalAudio(audio); if(isPanorama) { var media = playListItem.get('media'); var audios = media.get('audios'); audios.splice(audios.indexOf(audio), 1); media.set('audios', audios); } playList.unbind('change', changeFunction, this); if(endCallback) endCallback(); } }; var audios = window.currentGlobalAudios; if(audios && audio.get('id') in audios){ audio = audios[audio.get('id')]; if(audio.get('state') != 'playing'){ audio.play(); } return audio; } playList.bind('change', changeFunction, this); var playListItem = playList.get('items')[index]; var isPanorama = playListItem.get('class') == 'PanoramaPlayListItem'; if(isPanorama) { var media = playListItem.get('media'); var audios = (media.get('audios') || []).slice(); if(audio.get('class') == 'MediaAudio') { var panoramaAudio = this.rootPlayer.createInstance('PanoramaAudio'); panoramaAudio.set('autoplay', false); panoramaAudio.set('audio', audio.get('audio')); panoramaAudio.set('loop', audio.get('loop')); panoramaAudio.set('id', audio.get('id')); var stateChangeFunctions = audio.getBindings('stateChange'); for(var i = 0; i<stateChangeFunctions.length; ++i){ var f = stateChangeFunctions[i]; if(typeof f == 'string') f = new Function('event', f); panoramaAudio.bind('stateChange', f, this); } audio = panoramaAudio; } audios.push(audio); media.set('audios', audios); } return this.playGlobalAudio(audio, endCallback); },
  "visibleComponentsIfPlayerFlagEnabled": function(components, playerFlag){  var enabled = this.get(playerFlag); for(var i in components){ components[i].set('visible', enabled); } },
  "pauseGlobalAudios": function(caller, exclude){  if (window.pauseGlobalAudiosState == undefined) window.pauseGlobalAudiosState = {}; if (window.pauseGlobalAudiosList == undefined) window.pauseGlobalAudiosList = []; if (caller in window.pauseGlobalAudiosState) { return; } var audios = this.getByClassName('Audio').concat(this.getByClassName('VideoPanoramaOverlay')); if (window.currentGlobalAudios != undefined) audios = audios.concat(Object.values(window.currentGlobalAudios)); var audiosPaused = []; var values = Object.values(window.pauseGlobalAudiosState); for (var i = 0, count = values.length; i<count; ++i) { var objAudios = values[i]; for (var j = 0; j<objAudios.length; ++j) { var a = objAudios[j]; if(audiosPaused.indexOf(a) == -1) audiosPaused.push(a); } } window.pauseGlobalAudiosState[caller] = audiosPaused; for (var i = 0, count = audios.length; i < count; ++i) { var a = audios[i]; if (a.get('state') == 'playing' && (exclude == undefined || exclude.indexOf(a) == -1)) { a.pause(); audiosPaused.push(a); } } },
  "setStartTimeVideo": function(video, time){  var items = this.getPlayListItems(video); var startTimeBackup = []; var restoreStartTimeFunc = function() { for(var i = 0; i<items.length; ++i){ var item = items[i]; item.set('startTime', startTimeBackup[i]); item.unbind('stop', restoreStartTimeFunc, this); } }; for(var i = 0; i<items.length; ++i) { var item = items[i]; var player = item.get('player'); if(player.get('video') == video && player.get('state') == 'playing') { player.seek(time); } else { startTimeBackup.push(item.get('startTime')); item.set('startTime', time); item.bind('stop', restoreStartTimeFunc, this); } } },
  "getPlayListWithMedia": function(media, onlySelected){  var playLists = this.getByClassName('PlayList'); for(var i = 0, count = playLists.length; i<count; ++i){ var playList = playLists[i]; if(onlySelected && playList.get('selectedIndex') == -1) continue; if(this.getPlayListItemByMedia(playList, media) != undefined) return playList; } return undefined; },
  "setStartTimeVideoSync": function(video, player){  this.setStartTimeVideo(video, player.get('currentTime')); },
  "getMediaByName": function(name){  var list = this.getByClassName('Media'); for(var i = 0, count = list.length; i<count; ++i){ var media = list[i]; if((media.get('class') == 'Audio' && media.get('data').label == name) || media.get('label') == name){ return media; } } return undefined; },
  "getCurrentPlayerWithMedia": function(media){  var playerClass = undefined; var mediaPropertyName = undefined; switch(media.get('class')) { case 'Panorama': case 'LivePanorama': case 'HDRPanorama': playerClass = 'PanoramaPlayer'; mediaPropertyName = 'panorama'; break; case 'Video360': playerClass = 'PanoramaPlayer'; mediaPropertyName = 'video'; break; case 'PhotoAlbum': playerClass = 'PhotoAlbumPlayer'; mediaPropertyName = 'photoAlbum'; break; case 'Map': playerClass = 'MapPlayer'; mediaPropertyName = 'map'; break; case 'Video': playerClass = 'VideoPlayer'; mediaPropertyName = 'video'; break; }; if(playerClass != undefined) { var players = this.getByClassName(playerClass); for(var i = 0; i<players.length; ++i){ var player = players[i]; if(player.get(mediaPropertyName) == media) { return player; } } } else { return undefined; } },
  "setPanoramaCameraWithSpot": function(playListItem, yaw, pitch){  var panorama = playListItem.get('media'); var newCamera = this.cloneCamera(playListItem.get('camera')); var initialPosition = newCamera.get('initialPosition'); initialPosition.set('yaw', yaw); initialPosition.set('pitch', pitch); this.startPanoramaWithCamera(panorama, newCamera); },
  "setMainMediaByIndex": function(index){  var item = undefined; if(index >= 0 && index < this.mainPlayList.get('items').length){ this.mainPlayList.set('selectedIndex', index); item = this.mainPlayList.get('items')[index]; } return item; },
  "historyGoForward": function(playList){  var history = this.get('data')['history'][playList.get('id')]; if(history != undefined) { history.forward(); } },
  "setEndToItemIndex": function(playList, fromIndex, toIndex){  var endFunction = function(){ if(playList.get('selectedIndex') == fromIndex) playList.set('selectedIndex', toIndex); }; this.executeFunctionWhenChange(playList, fromIndex, endFunction); },
  "fixTogglePlayPauseButton": function(player){  var state = player.get('state'); var buttons = player.get('buttonPlayPause'); if(typeof buttons !== 'undefined' && player.get('state') == 'playing'){ if(!Array.isArray(buttons)) buttons = [buttons]; for(var i = 0; i<buttons.length; ++i) buttons[i].set('pressed', true); } },
  "showPopupMedia": function(w, media, playList, popupMaxWidth, popupMaxHeight, autoCloseWhenFinished, stopAudios){  var self = this; var closeFunction = function(){ playList.set('selectedIndex', -1); self.MainViewer.set('toolTipEnabled', true); if(stopAudios) { self.resumeGlobalAudios(); } this.resumePlayers(playersPaused, !stopAudios); if(isVideo) { this.unbind('resize', resizeFunction, this); } w.unbind('close', closeFunction, this); }; var endFunction = function(){ w.hide(); }; var resizeFunction = function(){ var getWinValue = function(property){ return w.get(property) || 0; }; var parentWidth = self.get('actualWidth'); var parentHeight = self.get('actualHeight'); var mediaWidth = self.getMediaWidth(media); var mediaHeight = self.getMediaHeight(media); var popupMaxWidthNumber = parseFloat(popupMaxWidth) / 100; var popupMaxHeightNumber = parseFloat(popupMaxHeight) / 100; var windowWidth = popupMaxWidthNumber * parentWidth; var windowHeight = popupMaxHeightNumber * parentHeight; var footerHeight = getWinValue('footerHeight'); var headerHeight = getWinValue('headerHeight'); if(!headerHeight) { var closeButtonHeight = getWinValue('closeButtonIconHeight') + getWinValue('closeButtonPaddingTop') + getWinValue('closeButtonPaddingBottom'); var titleHeight = self.getPixels(getWinValue('titleFontSize')) + getWinValue('titlePaddingTop') + getWinValue('titlePaddingBottom'); headerHeight = closeButtonHeight > titleHeight ? closeButtonHeight : titleHeight; headerHeight += getWinValue('headerPaddingTop') + getWinValue('headerPaddingBottom'); } var contentWindowWidth = windowWidth - getWinValue('bodyPaddingLeft') - getWinValue('bodyPaddingRight') - getWinValue('paddingLeft') - getWinValue('paddingRight'); var contentWindowHeight = windowHeight - headerHeight - footerHeight - getWinValue('bodyPaddingTop') - getWinValue('bodyPaddingBottom') - getWinValue('paddingTop') - getWinValue('paddingBottom'); var parentAspectRatio = contentWindowWidth / contentWindowHeight; var mediaAspectRatio = mediaWidth / mediaHeight; if(parentAspectRatio > mediaAspectRatio) { windowWidth = contentWindowHeight * mediaAspectRatio + getWinValue('bodyPaddingLeft') + getWinValue('bodyPaddingRight') + getWinValue('paddingLeft') + getWinValue('paddingRight'); } else { windowHeight = contentWindowWidth / mediaAspectRatio + headerHeight + footerHeight + getWinValue('bodyPaddingTop') + getWinValue('bodyPaddingBottom') + getWinValue('paddingTop') + getWinValue('paddingBottom'); } if(windowWidth > parentWidth * popupMaxWidthNumber) { windowWidth = parentWidth * popupMaxWidthNumber; } if(windowHeight > parentHeight * popupMaxHeightNumber) { windowHeight = parentHeight * popupMaxHeightNumber; } w.set('width', windowWidth); w.set('height', windowHeight); w.set('x', (parentWidth - getWinValue('actualWidth')) * 0.5); w.set('y', (parentHeight - getWinValue('actualHeight')) * 0.5); }; if(autoCloseWhenFinished){ this.executeFunctionWhenChange(playList, 0, endFunction); } var mediaClass = media.get('class'); var isVideo = mediaClass == 'Video' || mediaClass == 'Video360'; playList.set('selectedIndex', 0); if(isVideo){ this.bind('resize', resizeFunction, this); resizeFunction(); playList.get('items')[0].get('player').play(); } else { w.set('width', popupMaxWidth); w.set('height', popupMaxHeight); } this.MainViewer.set('toolTipEnabled', false); if(stopAudios) { this.pauseGlobalAudios(); } var playersPaused = this.pauseCurrentPlayers(!stopAudios); w.bind('close', closeFunction, this); w.show(this, true); },
  "cloneCamera": function(camera){  var newCamera = this.rootPlayer.createInstance(camera.get('class')); newCamera.set('id', camera.get('id') + '_copy'); newCamera.set('idleSequence', camera.get('initialSequence')); return newCamera; },
  "startPanoramaWithCamera": function(media, camera){  if(window.currentPanoramasWithCameraChanged != undefined && window.currentPanoramasWithCameraChanged.indexOf(media) != -1){ return; } var playLists = this.getByClassName('PlayList'); if(playLists.length == 0) return; var restoreItems = []; for(var i = 0, count = playLists.length; i<count; ++i){ var playList = playLists[i]; var items = playList.get('items'); for(var j = 0, countJ = items.length; j<countJ; ++j){ var item = items[j]; if(item.get('media') == media && (item.get('class') == 'PanoramaPlayListItem' || item.get('class') == 'Video360PlayListItem')){ restoreItems.push({camera: item.get('camera'), item: item}); item.set('camera', camera); } } } if(restoreItems.length > 0) { if(window.currentPanoramasWithCameraChanged == undefined) { window.currentPanoramasWithCameraChanged = [media]; } else { window.currentPanoramasWithCameraChanged.push(media); } var restoreCameraOnStop = function(){ var index = window.currentPanoramasWithCameraChanged.indexOf(media); if(index != -1) { window.currentPanoramasWithCameraChanged.splice(index, 1); } for (var i = 0; i < restoreItems.length; i++) { restoreItems[i].item.set('camera', restoreItems[i].camera); restoreItems[i].item.unbind('stop', restoreCameraOnStop, this); } }; for (var i = 0; i < restoreItems.length; i++) { restoreItems[i].item.bind('stop', restoreCameraOnStop, this); } } },
  "changePlayListWithSameSpot": function(playList, newIndex){  var currentIndex = playList.get('selectedIndex'); if (currentIndex >= 0 && newIndex >= 0 && currentIndex != newIndex) { var currentItem = playList.get('items')[currentIndex]; var newItem = playList.get('items')[newIndex]; var currentPlayer = currentItem.get('player'); var newPlayer = newItem.get('player'); if ((currentPlayer.get('class') == 'PanoramaPlayer' || currentPlayer.get('class') == 'Video360Player') && (newPlayer.get('class') == 'PanoramaPlayer' || newPlayer.get('class') == 'Video360Player')) { var newCamera = this.cloneCamera(newItem.get('camera')); this.setCameraSameSpotAsMedia(newCamera, currentItem.get('media')); this.startPanoramaWithCamera(newItem.get('media'), newCamera); } } },
  "shareTwitter": function(url){  window.open('https://twitter.com/intent/tweet?source=webclient&url=' + url, '_blank'); },
  "getKey": function(key){  return window[key]; }
 },
 "defaultVRPointer": "laser",
 "scrollBarMargin": 2,
 "contentOpaque": false,
 "minWidth": 20,
 "downloadEnabled": false,
 "verticalAlign": "top",
 "layout": "absolute",
 "height": "100%",
 "paddingTop": 0,
 "borderRadius": 0,
 "gap": 10,
 "shadow": false,
 "paddingBottom": 0,
 "scrollBarWidth": 10,
 "propagateClick": false,
 "overflow": "visible",
 "horizontalAlign": "left"
};

    
    function HistoryData(playList) {
        this.playList = playList;
        this.list = [];
        this.pointer = -1;
    }

    HistoryData.prototype.add = function(index){
        if(this.pointer < this.list.length && this.list[this.pointer] == index) {
            return;
        }
        ++this.pointer;
        this.list.splice(this.pointer, this.list.length - this.pointer, index);
    };

    HistoryData.prototype.back = function(){
        if(!this.canBack()) return;
        this.playList.set('selectedIndex', this.list[--this.pointer]);
    };

    HistoryData.prototype.forward = function(){
        if(!this.canForward()) return;
        this.playList.set('selectedIndex', this.list[++this.pointer]);
    };

    HistoryData.prototype.canBack = function(){
        return this.pointer > 0;
    };

    HistoryData.prototype.canForward = function(){
        return this.pointer >= 0 && this.pointer < this.list.length-1;
    };
    //

    if(script.data == undefined)
        script.data = {};
    script.data["history"] = {};    //playListID -> HistoryData

    TDV.PlayerAPI.defineScript(script);
})();
