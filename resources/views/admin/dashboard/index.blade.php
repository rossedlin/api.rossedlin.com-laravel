<?php
/**
 * @author Ross Edlin <contact@rossedlin.com>
 * Date: 2020-09-08
 * Time: 18:28
 */
?>

@extends('layouts.admin.app')

@section('content')
    <div class="g-pa-20">
        <div class="row">
            <div class="col-sm-6 col-lg-6 col-xl-3 g-mb-30">
                <!-- Panel -->
                <div class="card h-100 g-brd-gray-light-v7 rounded">
                    <div class="card-block g-font-weight-300 g-pa-20">
                        <div class="media">
                            <div class="d-flex g-mr-15">
                                <div class="js-pie-chart g-pos-rel mx-auto" style="width: 60px; height: 60px;" data-series='[50, 20, 50]' data-start-angle="330" data-fill-colors='["#f1f5f5", "#1d75e5", "#3dd1e8"]'></div>
                            </div>

                            <div class="media-body align-self-center">
                                <h4 class="g-font-size-16 g-font-weight-300 g-color-gray-dark-v6 mb-0">Projects Done</h4>

                                <div class="d-flex">
                                    <span class="d-flex g-font-size-22 g-color-black">99.9%</span>

                                    <div class="d-flex align-items-center g-color-gray-dark-v10 g-ml-10">
                                        <span>+35%</span>
                                        <span class="d-flex align-self-center g-font-size-0 g-mt-2 g-ml-5">
                          <i class="g-fill-gray-dark-v9">
                            <svg width="8px" height="13px" viewbox="0 0 12 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                              <g transform="translate(-21.000000, -751.000000)">
                                <g transform="translate(0.000000, 64.000000)">
                                  <g transform="translate(20.000000, 619.000000)">
                                    <g transform="translate(1.000000, 68.000000)">
                                      <polygon points="6 20 0 13.9709049 0.576828937 13.3911999 5.59205874 18.430615 5.59205874 0 6.40794126 0 6.40794126 18.430615 11.4223552 13.3911999 12 13.9709049"></polygon>
                                    </g>
                                  </g>
                                </g>
                              </g>
                            </svg>
                          </i>
                          <i class="g-fill-lightblue-v3">
                            <svg width="8px" height="13px" viewbox="0 0 12 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                              <g transform="translate(-33.000000, -751.000000)">
                                <g transform="translate(0.000000, 64.000000)">
                                  <g transform="translate(20.000000, 619.000000)">
                                    <g transform="translate(1.000000, 68.000000)">
                                      <polygon
                                              transform="translate(18.000000, 10.000000) scale(1, -1) translate(-18.000000, -10.000000)"
                                              points="18 20 12 13.9709049 12.5768289 13.3911999 17.5920587 18.430615 17.5920587 0 18.4079413 0 18.4079413 18.430615 23.4223552 13.3911999 24 13.9709049"></polygon>
                                    </g>
                                  </g>
                                </g>
                              </g>
                            </svg>
                          </i>
                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Panel -->
            </div>

            <div class="col-sm-6 col-lg-6 col-xl-3 g-mb-30">
                <!-- Panel -->
                <div class="card h-100 g-brd-gray-light-v7 rounded">
                    <div class="card-block g-font-weight-300 g-pa-20">
                        <div class="media">
                            <div class="d-flex g-mr-15">
                                <div class="js-pie-chart g-pos-rel mx-auto" style="width: 60px; height: 60px;" data-series='[70, 50]' data-start-angle="330" data-fill-colors='["#f1f5f5", "#15d3b2"]'></div>
                            </div>

                            <div class="media-body align-self-center">
                                <h4 class="g-font-size-16 g-font-weight-300 g-color-gray-dark-v6 mb-0">Tasks Complete</h4>

                                <div class="d-flex">
                                    <span class="d-flex g-font-size-22 g-color-black">168</span>

                                    <div class="d-flex align-items-center g-color-gray-dark-v10 g-ml-10">
                                        <span>+15%</span>
                                        <span class="d-flex align-self-center g-font-size-0 g-mt-2 g-ml-5">
                          <i class="g-fill-gray-dark-v9">
                            <svg width="8px" height="13px" viewbox="0 0 12 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                              <g transform="translate(-21.000000, -751.000000)">
                                <g transform="translate(0.000000, 64.000000)">
                                  <g transform="translate(20.000000, 619.000000)">
                                    <g transform="translate(1.000000, 68.000000)">
                                      <polygon points="6 20 0 13.9709049 0.576828937 13.3911999 5.59205874 18.430615 5.59205874 0 6.40794126 0 6.40794126 18.430615 11.4223552 13.3911999 12 13.9709049"></polygon>
                                    </g>
                                  </g>
                                </g>
                              </g>
                            </svg>
                          </i>
                          <i class="g-fill-lightblue-v3">
                            <svg width="8px" height="13px" viewbox="0 0 12 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                              <g transform="translate(-33.000000, -751.000000)">
                                <g transform="translate(0.000000, 64.000000)">
                                  <g transform="translate(20.000000, 619.000000)">
                                    <g transform="translate(1.000000, 68.000000)">
                                      <polygon
                                              transform="translate(18.000000, 10.000000) scale(1, -1) translate(-18.000000, -10.000000)"
                                              points="18 20 12 13.9709049 12.5768289 13.3911999 17.5920587 18.430615 17.5920587 0 18.4079413 0 18.4079413 18.430615 23.4223552 13.3911999 24 13.9709049"></polygon>
                                    </g>
                                  </g>
                                </g>
                              </g>
                            </svg>
                          </i>
                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Panel -->
            </div>

            <div class="col-sm-6 col-lg-6 col-xl-3 g-mb-30">
                <!-- Panel -->
                <div class="card h-100 g-brd-gray-light-v7 rounded">
                    <div class="card-block g-font-weight-300 g-pa-20">
                        <div class="media">
                            <div class="d-flex g-mr-15">
                                <div class="js-pie-chart g-pos-rel mx-auto" style="width: 60px; height: 60px;" data-series='[50, 20, 50]' data-start-angle="330" data-fill-colors='["#f1f5f5", "#3dd1e8", "#1d75e5"]'></div>
                            </div>

                            <div class="media-body align-self-center">
                                <h4 class="g-font-size-16 g-font-weight-300 g-color-gray-dark-v6 mb-0">Weekly Income</h4>

                                <div class="d-flex">
                                    <span class="d-flex g-font-size-22 g-color-black">$24,800</span>

                                    <div class="d-flex align-items-center g-color-gray-dark-v10 g-ml-10">
                                        <span>+52%</span>
                                        <span class="d-flex align-self-center g-font-size-0 g-mt-2 g-ml-5">
                          <i class="g-fill-gray-dark-v9">
                            <svg width="8px" height="13px" viewbox="0 0 12 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                              <g transform="translate(-21.000000, -751.000000)">
                                <g transform="translate(0.000000, 64.000000)">
                                  <g transform="translate(20.000000, 619.000000)">
                                    <g transform="translate(1.000000, 68.000000)">
                                      <polygon points="6 20 0 13.9709049 0.576828937 13.3911999 5.59205874 18.430615 5.59205874 0 6.40794126 0 6.40794126 18.430615 11.4223552 13.3911999 12 13.9709049"></polygon>
                                    </g>
                                  </g>
                                </g>
                              </g>
                            </svg>
                          </i>
                          <i class="g-fill-lightblue-v3">
                            <svg width="8px" height="13px" viewbox="0 0 12 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                              <g transform="translate(-33.000000, -751.000000)">
                                <g transform="translate(0.000000, 64.000000)">
                                  <g transform="translate(20.000000, 619.000000)">
                                    <g transform="translate(1.000000, 68.000000)">
                                      <polygon
                                              transform="translate(18.000000, 10.000000) scale(1, -1) translate(-18.000000, -10.000000)"
                                              points="18 20 12 13.9709049 12.5768289 13.3911999 17.5920587 18.430615 17.5920587 0 18.4079413 0 18.4079413 18.430615 23.4223552 13.3911999 24 13.9709049"></polygon>
                                    </g>
                                  </g>
                                </g>
                              </g>
                            </svg>
                          </i>
                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Panel -->
            </div>

            <div class="col-sm-6 col-lg-6 col-xl-3 g-mb-30">
                <!-- Panel -->
                <div class="card h-100 g-brd-gray-light-v7 rounded">
                    <div class="card-block g-font-weight-300 g-pa-20">
                        <div class="media">
                            <div class="d-flex g-mr-15">
                                <div class="js-pie-chart g-pos-rel mx-auto" style="width: 60px; height: 60px;" data-series='[50, 70]' data-start-angle="330" data-fill-colors='["#f1f5f5", "#e62154"]'></div>
                            </div>

                            <div class="media-body align-self-center">
                                <h4 class="g-font-size-16 g-font-weight-300 g-color-gray-dark-v6 mb-0">New Clients</h4>

                                <div class="d-flex">
                                    <span class="d-flex g-font-size-22 g-color-black">32</span>

                                    <div class="d-flex align-items-center g-color-gray-dark-v10 g-ml-10">
                                        <span>+5%</span>
                                        <span class="d-flex align-self-center g-font-size-0 g-mt-2 g-ml-5">
                          <i class="g-fill-gray-dark-v9">
                            <svg width="8px" height="13px" viewbox="0 0 12 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                              <g transform="translate(-21.000000, -751.000000)">
                                <g transform="translate(0.000000, 64.000000)">
                                  <g transform="translate(20.000000, 619.000000)">
                                    <g transform="translate(1.000000, 68.000000)">
                                      <polygon points="6 20 0 13.9709049 0.576828937 13.3911999 5.59205874 18.430615 5.59205874 0 6.40794126 0 6.40794126 18.430615 11.4223552 13.3911999 12 13.9709049"></polygon>
                                    </g>
                                  </g>
                                </g>
                              </g>
                            </svg>
                          </i>
                          <i class="g-fill-lightblue-v3">
                            <svg width="8px" height="13px" viewbox="0 0 12 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                              <g transform="translate(-33.000000, -751.000000)">
                                <g transform="translate(0.000000, 64.000000)">
                                  <g transform="translate(20.000000, 619.000000)">
                                    <g transform="translate(1.000000, 68.000000)">
                                      <polygon
                                              transform="translate(18.000000, 10.000000) scale(1, -1) translate(-18.000000, -10.000000)"
                                              points="18 20 12 13.9709049 12.5768289 13.3911999 17.5920587 18.430615 17.5920587 0 18.4079413 0 18.4079413 18.430615 23.4223552 13.3911999 24 13.9709049"></polygon>
                                    </g>
                                  </g>
                                </g>
                              </g>
                            </svg>
                          </i>
                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Panel -->
            </div>

            <div class="col-xl-9">
                <div class="row">
                    <div class="col-xl-6">
                        <!-- Sales Card -->
                        <div class="card g-brd-gray-light-v7 g-pa-15 g-pa-25-30--md g-min-height-250 g-mb-30">
                            <header class="media g-mb-25">
                                <h3 class="d-flex align-self-center text-uppercase g-font-size-12 g-font-size-default--md g-color-black mb-0">Sales</h3>

                                <div class="media-body d-flex justify-content-end">
                                    <a class="hs-admin-reload u-link-v5 g-font-size-20 g-color-gray-light-v3 g-color-secondary--hover" href="#"></a>
                                </div>
                            </header>

                            <section class="d-flex align-items-center g-mb-35">
                                <span class="g-font-weight-300 g-font-size-22 g-font-size-28--md g-color-black">$48,200</span>
                                <span class="d-flex align-self-center g-font-size-0 g-ml-10">
      <svg class="g-fill-gray-dark-v9" width="12px" height="20px" viewBox="0 0 12 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g transform="translate(-21.000000, -751.000000)">
          <g transform="translate(0.000000, 64.000000)">
            <g transform="translate(20.000000, 619.000000)">
              <g transform="translate(1.000000, 68.000000)">
                <polygon points="6 20 0 13.9709049 0.576828937 13.3911999 5.59205874 18.430615 5.59205874 0 6.40794126 0 6.40794126 18.430615 11.4223552 13.3911999 12 13.9709049"></polygon>
              </g>
            </g>
          </g>
        </g>
      </svg>
      <svg class="g-fill-lightblue-v3" width="12px" height="20px" viewBox="0 0 12 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g transform="translate(-33.000000, -751.000000)">
          <g transform="translate(0.000000, 64.000000)">
            <g transform="translate(20.000000, 619.000000)">
              <g transform="translate(1.000000, 68.000000)">
                <polygon transform="translate(18.000000, 10.000000) scale(1, -1) translate(-18.000000, -10.000000)" points="18 20 12 13.9709049 12.5768289 13.3911999 17.5920587 18.430615 17.5920587 0 18.4079413 0 18.4079413 18.430615 23.4223552 13.3911999 24 13.9709049"></polygon>
              </g>
            </g>
          </g>
        </g>
      </svg>
    </span>
                            </section>

                            <section class="js-bar-chart g-line-height-0" data-series='[
             [10,8,5,7,6,6,10,10,8,5,7,6,6,10,6,6,10,10,8,5,7,6,6,10,6,6,10,10,8]
           ]' data-is-show-axis-x="false" data-is-show-axis-y="false" data-height="62px" data-high="10" data-low="0" data-distance="4" data-stroke-width="6" data-stroke-color="#1cc9e4"></section>
                        </div>
                        <!-- End Sales Card -->
                    </div>

                    <div class="col-xl-6">
                        <!-- CTR Card-->
                        <div class="card g-brd-gray-light-v7 g-pa-15 g-pa-25-30--md g-min-height-250 g-mb-30">
                            <header class="media g-mb-20">
                                <h3 class="d-flex align-self-center text-uppercase g-font-size-12 g-font-size-default--md g-color-black mb-0">CTR</h3>

                                <div class="media-body d-flex justify-content-end">August</div>
                            </header>

                            <section class="row g-mb-25">
                                <div class="col-md-4 d-flex d-md-block g-mb-10 g-mb-0--md">
                                    <h5 class="align-self-center g-font-weight-300 g-font-size-default g-color-gray-dark-v6 mb-0 g-mb-10--md">Overall Growth</h5>

                                    <div class="d-flex align-items-center ml-auto ml-0--md">
                          <span class="d-flex align-self-center g-font-size-0 g-mr-10">
          <svg class="g-fill-primary" width="12px" height="20px" viewBox="0 0 12 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g transform="translate(-21.000000, -751.000000)">
              <g transform="translate(0.000000, 64.000000)">
                <g transform="translate(20.000000, 619.000000)">
                  <g transform="translate(1.000000, 68.000000)">
                    <polygon points="6 20 0 13.9709049 0.576828937 13.3911999 5.59205874 18.430615 5.59205874 0 6.40794126 0 6.40794126 18.430615 11.4223552 13.3911999 12 13.9709049"></polygon>
                  </g>
                </g>
              </g>
            </g>
          </svg>
          <svg class="g-fill-gray-dark-v9" width="12px" height="20px" viewBox="0 0 12 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g transform="translate(-33.000000, -751.000000)">
              <g transform="translate(0.000000, 64.000000)">
                <g transform="translate(20.000000, 619.000000)">
                  <g transform="translate(1.000000, 68.000000)">
                    <polygon transform="translate(18.000000, 10.000000) scale(1, -1) translate(-18.000000, -10.000000)" points="18 20 12 13.9709049 12.5768289 13.3911999 17.5920587 18.430615 17.5920587 0 18.4079413 0 18.4079413 18.430615 23.4223552 13.3911999 24 13.9709049"></polygon>
                  </g>
                </g>
              </g>
            </g>
          </svg>
        </span>
                                        <span class="g-font-weight-300 g-font-size-18 g-color-black">80,1%</span>
                                    </div>
                                </div>

                                <div class="col-md-4 d-flex d-md-block g-brd-left--md g-brd-gray-light-v4 g-mb-10 g-mb-0--md">
                                    <h5 class="align-self-center g-font-weight-300 g-font-size-default g-color-gray-dark-v6 mb-0 g-mb-10--md">Monthly</h5>

                                    <div class="d-flex align-items-center ml-auto ml-0--md">
                          <span class="d-flex align-self-center g-font-size-0 g-mr-10">
          <svg class="g-fill-gray-dark-v9" width="12px" height="20px" viewBox="0 0 12 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g transform="translate(-21.000000, -751.000000)">
              <g transform="translate(0.000000, 64.000000)">
                <g transform="translate(20.000000, 619.000000)">
                  <g transform="translate(1.000000, 68.000000)">
                    <polygon points="6 20 0 13.9709049 0.576828937 13.3911999 5.59205874 18.430615 5.59205874 0 6.40794126 0 6.40794126 18.430615 11.4223552 13.3911999 12 13.9709049"></polygon>
                  </g>
                </g>
              </g>
            </g>
          </svg>
          <svg class="g-fill-lightblue-v3" width="12px" height="20px" viewBox="0 0 12 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g transform="translate(-33.000000, -751.000000)">
              <g transform="translate(0.000000, 64.000000)">
                <g transform="translate(20.000000, 619.000000)">
                  <g transform="translate(1.000000, 68.000000)">
                    <polygon transform="translate(18.000000, 10.000000) scale(1, -1) translate(-18.000000, -10.000000)" points="18 20 12 13.9709049 12.5768289 13.3911999 17.5920587 18.430615 17.5920587 0 18.4079413 0 18.4079413 18.430615 23.4223552 13.3911999 24 13.9709049"></polygon>
                  </g>
                </g>
              </g>
            </g>
          </svg>
        </span>
                                        <span class="g-font-weight-300 g-font-size-18 g-color-black">15%</span>
                                    </div>
                                </div>

                                <div class="col-md-4 d-flex d-md-block g-brd-left--md g-brd-gray-light-v4">
                                    <h5 class="align-self-center g-font-weight-300 g-font-size-default g-color-gray-dark-v6 mb-0 g-mb-10--md">Day</h5>

                                    <div class="d-flex align-items-center ml-auto ml-0--md">
                          <span class="d-flex align-self-center g-font-size-0 g-mr-10">
          <svg class="g-fill-gray-dark-v9" width="12px" height="20px" viewBox="0 0 12 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g transform="translate(-21.000000, -751.000000)">
              <g transform="translate(0.000000, 64.000000)">
                <g transform="translate(20.000000, 619.000000)">
                  <g transform="translate(1.000000, 68.000000)">
                    <polygon points="6 20 0 13.9709049 0.576828937 13.3911999 5.59205874 18.430615 5.59205874 0 6.40794126 0 6.40794126 18.430615 11.4223552 13.3911999 12 13.9709049"></polygon>
                  </g>
                </g>
              </g>
            </g>
          </svg>
          <svg class="g-fill-lightblue-v3" width="12px" height="20px" viewBox="0 0 12 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g transform="translate(-33.000000, -751.000000)">
              <g transform="translate(0.000000, 64.000000)">
                <g transform="translate(20.000000, 619.000000)">
                  <g transform="translate(1.000000, 68.000000)">
                    <polygon transform="translate(18.000000, 10.000000) scale(1, -1) translate(-18.000000, -10.000000)" points="18 20 12 13.9709049 12.5768289 13.3911999 17.5920587 18.430615 17.5920587 0 18.4079413 0 18.4079413 18.430615 23.4223552 13.3911999 24 13.9709049"></polygon>
                  </g>
                </g>
              </g>
            </g>
          </svg>
        </span>
                                        <span class="g-font-weight-300 g-font-size-18 g-color-black">5.2%</span>
                                    </div>
                                </div>
                            </section>

                            <section class="progress g-height-4 g-rounded-2 g-mb-12">
                                <div class="progress-bar g-bg-lightblue-v3 g-rounded-2" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                            </section>

                            <section class="progress g-height-4 g-rounded-2 g-mb-12">
                                <div class="progress-bar g-bg-darkblue-v2 g-rounded-2" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                            </section>

                            <section class="progress g-height-4 g-rounded-2">
                                <div class="progress-bar g-bg-darkblue-v7 g-rounded-2" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </section>
                        </div>
                        <!-- End CTR Card-->
                    </div>

                    <div class="col-xl-12">
                        <!-- Income Cards -->
                        <div class="card g-brd-gray-light-v7 g-mb-30">
                            <header class="media g-pa-15 g-pa-25-30-0--md g-mb-20">
                                <div class="media-body align-self-center">
                                    <h3 class="text-uppercase g-font-size-default g-color-black g-mb-8">Total Income</h3>

                                    <div id="rangePickerWrapper3" class="u-datepicker-left u-datepicker--v3">
                                        <input id="rangeDatepicker3" class="g-font-size-12 g-font-size-default--md" type="text" data-rp-wrapper="#rangePickerWrapper3" data-rp-type="range" data-rp-date-format="d M Y" data-rp-default-date='["01 Jan 2016", "31 Dec 2017"]'>
                                        <i class="hs-admin-angle-down g-absolute-centered--y g-right-0 g-color-gray-light-v3"></i>
                                    </div>
                                </div>

                                <div class="d-flex align-self-end align-items-center">
                                    <span class="g-line-height-1 g-font-weight-300 g-font-size-28 g-color-secondary">$48,200</span>
                                    <span class="d-flex align-self-center g-font-size-0 g-ml-10">
        <i class="g-fill-gray-dark-v9">
          <svg width="12px" height="20px" viewBox="0 0 12 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g transform="translate(-21.000000, -751.000000)">
              <g transform="translate(0.000000, 64.000000)">
                <g transform="translate(20.000000, 619.000000)">
                  <g transform="translate(1.000000, 68.000000)">
                    <polygon points="6 20 0 13.9709049 0.576828937 13.3911999 5.59205874 18.430615 5.59205874 0 6.40794126 0 6.40794126 18.430615 11.4223552 13.3911999 12 13.9709049"></polygon>
                  </g>
                </g>
              </g>
            </g>
          </svg>
        </i>
        <i class="g-fill-lightblue-v3">
          <svg width="12px" height="20px" viewBox="0 0 12 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g transform="translate(-33.000000, -751.000000)">
              <g transform="translate(0.000000, 64.000000)">
                <g transform="translate(20.000000, 619.000000)">
                  <g transform="translate(1.000000, 68.000000)">
                    <polygon transform="translate(18.000000, 10.000000) scale(1, -1) translate(-18.000000, -10.000000)" points="18 20 12 13.9709049 12.5768289 13.3911999 17.5920587 18.430615 17.5920587 0 18.4079413 0 18.4079413 18.430615 23.4223552 13.3911999 24 13.9709049"></polygon>
                  </g>
                </g>
              </g>
            </g>
          </svg>
        </i>
      </span>
                                </div>
                            </header>

                            <div class="js-custom-scroll g-height-400 g-pa-15 g-pa-0-30-25--md">
                                <table class="table table-responsive-sm w-100">
                                    <thead>
                                    <tr>
                                        <th class="g-font-weight-300 g-color-gray-dark-v6 g-brd-top-none g-pl-20">#</th>
                                        <th class="g-font-weight-300 g-color-gray-dark-v6 g-brd-top-none">Name</th>
                                        <th class="g-font-weight-300 g-color-gray-dark-v6 g-brd-top-none">Status</th>
                                        <th class="g-font-weight-300 g-color-gray-dark-v6 g-brd-top-none">Date</th>
                                        <th class="text-right g-font-weight-300 g-color-gray-dark-v6 g-brd-top-none">Price</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10 g-pl-20">1</td>
                                        <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">Business Cards</td>
                                        <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">
                                            <span class="u-tags-v1 text-center g-width-100 g-brd-around g-brd-lightblue-v3 g-bg-lightblue-v3 g-font-size-default g-color-white g-rounded-50 g-py-4 g-px-15">approved</span>
                                        </td>
                                        <td class="g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">Aug 12, 2016</td>
                                        <td class="text-right g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">$2045</td>
                                    </tr>

                                    <tr>
                                        <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10 g-pl-20">2</td>
                                        <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">Advertising Outdoors</td>
                                        <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">
                                            <span class="u-tags-v1 text-center g-width-100 g-brd-around g-brd-lightred-v2 g-bg-lightred-v2 g-font-size-default g-color-white g-rounded-50 g-py-4 g-px-15">pending</span>
                                        </td>
                                        <td class="g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">Jun 6, 2016</td>
                                        <td class="text-right g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">$995</td>
                                    </tr>

                                    <tr>
                                        <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10 g-pl-20">3</td>
                                        <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">Freelance Design</td>
                                        <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">
                                            <span class="u-tags-v1 text-center g-width-100 g-brd-around g-brd-teal-v2 g-bg-teal-v2 g-font-size-default g-color-white g-rounded-50 g-py-4 g-px-15">done</span>
                                        </td>
                                        <td class="g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">Sep 8, 2016</td>
                                        <td class="text-right g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">$1025</td>
                                    </tr>

                                    <tr>
                                        <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10 g-pl-20">4</td>
                                        <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">Music Improvement</td>
                                        <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">
                                            <span class="u-tags-v1 text-center g-width-100 g-brd-around g-brd-lightblue-v3 g-bg-lightblue-v3 g-font-size-default g-color-white g-rounded-50 g-py-4 g-px-15">approved</span>
                                        </td>
                                        <td class="g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">Dec 20, 2016</td>
                                        <td class="text-right g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">$9562</td>
                                    </tr>

                                    <tr>
                                        <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom--md g-brd-2 g-brd-gray-light-v4 g-py-10 g-pl-20">5</td>
                                        <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom--md g-brd-2 g-brd-gray-light-v4 g-py-10">Truck Advertising</td>
                                        <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom--md g-brd-2 g-brd-gray-light-v4 g-py-10">
                                            <span class="u-tags-v1 text-center g-width-100 g-brd-around g-brd-teal-v2 g-bg-teal-v2 g-font-size-default g-color-white g-rounded-50 g-py-4 g-px-15">done</span>
                                        </td>
                                        <td class="g-valign-middle g-brd-top-none g-brd-bottom--md g-brd-2 g-brd-gray-light-v4 g-py-10">Dec 24, 2016</td>
                                        <td class="text-right g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom--md g-brd-2 g-brd-gray-light-v4 g-py-10">$5470</td>
                                    </tr>

                                    <tr>
                                        <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10 g-pl-20">6</td>
                                        <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">Business Cards</td>
                                        <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">
                                            <span class="u-tags-v1 text-center g-width-100 g-brd-around g-brd-lightblue-v3 g-bg-lightblue-v3 g-font-size-default g-color-white g-rounded-50 g-py-4 g-px-15">approved</span>
                                        </td>
                                        <td class="g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">Aug 12, 2016</td>
                                        <td class="text-right g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">$2045</td>
                                    </tr>

                                    <tr>
                                        <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10 g-pl-20">7</td>
                                        <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">Advertising Outdoors</td>
                                        <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">
                                            <span class="u-tags-v1 text-center g-width-100 g-brd-around g-brd-lightred-v2 g-bg-lightred-v2 g-font-size-default g-color-white g-rounded-50 g-py-4 g-px-15">pending</span>
                                        </td>
                                        <td class="g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">Jun 6, 2016</td>
                                        <td class="text-right g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">$995</td>
                                    </tr>

                                    <tr>
                                        <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10 g-pl-20">8</td>
                                        <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">Freelance Design</td>
                                        <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">
                                            <span class="u-tags-v1 text-center g-width-100 g-brd-around g-brd-teal-v2 g-bg-teal-v2 g-font-size-default g-color-white g-rounded-50 g-py-4 g-px-15">done</span>
                                        </td>
                                        <td class="g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">Sep 8, 2016</td>
                                        <td class="text-right g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">$1025</td>
                                    </tr>

                                    <tr>
                                        <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10 g-pl-20">9</td>
                                        <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">Music Improvement</td>
                                        <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">
                                            <span class="u-tags-v1 text-center g-width-100 g-brd-around g-brd-lightblue-v3 g-bg-lightblue-v3 g-font-size-default g-color-white g-rounded-50 g-py-4 g-px-15">approved</span>
                                        </td>
                                        <td class="g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">Dec 20, 2016</td>
                                        <td class="text-right g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">$9562</td>
                                    </tr>

                                    <tr>
                                        <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom--md g-brd-2 g-brd-gray-light-v4 g-py-10 g-pl-20">10</td>
                                        <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom--md g-brd-2 g-brd-gray-light-v4 g-py-10">Truck Advertising</td>
                                        <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom--md g-brd-2 g-brd-gray-light-v4 g-py-10">
                                            <span class="u-tags-v1 text-center g-width-100 g-brd-around g-brd-teal-v2 g-bg-teal-v2 g-font-size-default g-color-white g-rounded-50 g-py-4 g-px-15">done</span>
                                        </td>
                                        <td class="g-valign-middle g-brd-top-none g-brd-bottom--md g-brd-2 g-brd-gray-light-v4 g-py-10">Dec 24, 2016</td>
                                        <td class="text-right g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom--md g-brd-2 g-brd-gray-light-v4 g-py-10">$5470</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="js-area-chart u-area-chart--v1 g-pos-rel g-line-height-0" data-height="65px" data-high="2420" data-low="0" data-offset-x="0" data-offset-y="0" data-postfix=" m" data-is-show-area="true" data-is-show-line="false" data-is-show-point="true" data-is-full-width="true"
                                 data-is-stack-bars="true" data-is-show-axis-x="false" data-is-show-axis-y="false" data-is-show-tooltips="true" data-tooltip-description-position="left" data-tooltip-custom-class="u-tooltip--v2 g-font-weight-300 g-font-size-default g-color-gray-dark-v6"
                                 data-align-text-axis-x="center" data-fill-opacity="1" data-fill-colors='["#67c8d8"]' data-stroke-color="#e1eaea" data-stroke-dash-array="0" data-text-size-x="14px" data-text-color-x="#000000" data-text-offset-top-x="0" data-text-size-y="14px"
                                 data-text-color-y="#53585e" data-points-colors='["#1cc9e4"]' data-series='[
            [
              {"meta": "$", "value": 100},
              {"meta": "$", "value": 2100},
              {"meta": "$", "value": 350},
              {"meta": "$", "value": 2920},
              {"meta": "$", "value": 840},
              {"meta": "$", "value": 2770}
            ]
          ]' data-labels='["2013", "2014", "2015", "2016", "2017"]'></div>
                        </div>
                        <!-- End Income Cards -->
                    </div>
                </div>
            </div>

            <div class="col-xl-3">
                <!-- Activity Card -->
                <div class="card g-brd-gray-light-v7 g-mb-30">
                    <header class="media g-pa-15 g-pa-25-30-0--md">
                        <h3 class="d-flex align-self-center text-uppercase g-font-size-12 g-font-size-default--md g-color-black mb-0">Activity</h3>
                    </header>

                    <div class="js-custom-scroll g-height-780 g-pa-15 g-pl-5--md g-pr-30--md g-py-25--md mCustomScrollbar _mCS_4 mCS-autoHide">
                        <section class="u-timeline-v2-wrap g-pos-rel g-left-25--before g-mb-20">
                            <div class="g-orientation-left g-pos-rel g-ml-25--md g-pl-20">
                                <div class="g-hidden-sm-down u-timeline-v2__icon g-top-35">
                                    <i class="d-block g-width-16 g-height-16 g-bg-white g-brd-around g-brd-2 g-brd-secondary rounded-circle"></i>
                                </div>

                                <div class="media g-mb-16">
                                    <div class="d-flex align-self-center g-mr-15">
                                        <img class="g-width-55 g-height-55 rounded-circle" src="/img-temp/100x100/img1.jpg" alt="Image Description">
                                    </div>

                                    <div class="media-body align-self-center">
                                        <h3 class="g-font-weight-300 g-font-size-16 g-mb-3">Htmlstream</h3>
                                        <em class="g-font-style-normal g-color-secondary">Commented on Project</em>
                                    </div>
                                </div>

                                <p class="g-font-weight-300 g-font-size-default g-mb-16">When you browse through videos at YouTube, which do you usually click first: one with around 10 views or one with around 75,000 views</p>
                                <em class="d-flex align-self-center align-items-center g-font-style-normal g-color-gray-dark-v6">
                                    <i class="hs-admin-time g-font-size-default g-font-size-18--md g-color-gray-light-v3"></i>
                                    <span class="g-font-weight-300 g-font-size-12 g-font-size-default--md g-ml-4 g-ml-8--md">45 Min <span class="g-hidden-md-down">ago</span></span>
                                </em>
                            </div>

                            <hr class="d-flex g-brd-gray-light-v4 g-ml-35--md g-my-20 g-my-30--md">

                            <div class="g-orientation-left g-pos-rel g-ml-25--md g-pl-20">
                                <div class="g-hidden-sm-down u-timeline-v2__icon g-top-35">
                                    <i class="d-block g-width-16 g-height-16 g-bg-white g-brd-around g-brd-2 g-brd-secondary rounded-circle"></i>
                                </div>

                                <div class="media g-mb-25">
                                    <div class="d-flex align-self-center g-mr-15">
                                        <img class="g-width-55 g-height-55 rounded-circle" src="/img-temp/100x100/img4.jpg" alt="Image Description">
                                    </div>

                                    <div class="media-body align-self-center">
                                        <h3 class="g-font-weight-300 g-font-size-16 g-mb-3">E<span class="g-hidden-md-down">mma&nbsp;</span><span class="g-hidden-md-up">.</span>Watson</h3>
                                        <em class="g-font-style-normal g-color-secondary">Added New Files</em>
                                    </div>
                                </div>

                                <em class="d-flex align-self-center align-items-center g-font-style-normal g-mb-30">
                                    <i class="hs-admin-zip g-font-size-24 g-color-secondary"></i>
                                    <span class="g-font-weight-300 g-font-size-default g-color-gray-dark-v6 g-ml-12">Project Updates.zip</span>
                                </em>

                                <em class="d-flex align-self-center align-items-center g-font-style-normal g-color-gray-dark-v6">
                                    <i class="hs-admin-time g-font-size-default g-font-size-18--md g-color-gray-light-v3"></i>
                                    <span class="g-font-weight-300 g-font-size-12 g-font-size-default--md g-ml-4 g-ml-8--md">10 Min <span class="g-hidden-md-down">ago</span></span>
                                </em>
                            </div>

                            <hr class="d-flex g-brd-gray-light-v4 g-ml-35--md g-my-20 g-my-30--md">

                            <div class="g-orientation-left g-pos-rel g-ml-25--md g-pl-20">
                                <div class="g-hidden-sm-down u-timeline-v2__icon g-top-35">
                                    <i class="d-block g-width-16 g-height-16 g-bg-white g-brd-around g-brd-2 g-brd-secondary rounded-circle"></i>
                                </div>

                                <div class="media g-mb-16">
                                    <div class="d-flex align-self-center g-mr-15">
                                        <img class="g-width-55 g-height-55 rounded-circle" src="/img-temp/100x100/img5.jpg" alt="Image Description">
                                    </div>

                                    <div class="media-body align-self-center">
                                        <h3 class="g-font-weight-300 g-font-size-16 g-mb-3">V<span class="g-hidden-md-down">erna&nbsp;</span><span class="g-hidden-md-up">.</span>Swanson</h3>
                                        <em class="g-font-style-normal g-color-secondary">Commented on Project</em>
                                    </div>
                                </div>

                                <p class="g-font-weight-300 g-font-size-default g-mb-16">The collapse of the online-advertising market in 2001 made marketing on the Internet seem even less compelling. Website usability, press releases, online media buys, podcasts, mobile marketing and more – there’s an entire world</p>
                                <em class="d-flex align-self-center align-items-center g-font-style-normal g-color-gray-dark-v6">
                                    <i class="hs-admin-time g-font-size-default g-font-size-18--md g-color-gray-light-v3"></i>
                                    <span class="g-font-weight-300 g-font-size-12 g-font-size-default--md g-ml-4 g-ml-8--md">10 Min <span class="g-hidden-md-down">ago</span></span>
                                </em>
                            </div>

                            <hr class="d-flex g-brd-gray-light-v4 g-ml-35--md g-my-20 g-my-30--md">

                            <div class="g-orientation-left g-pos-rel g-ml-25--md g-pl-20">
                                <div class="g-hidden-sm-down u-timeline-v2__icon g-top-35">
                                    <i class="d-block g-width-16 g-height-16 g-bg-white g-brd-around g-brd-2 g-brd-secondary rounded-circle"></i>
                                </div>

                                <div class="media g-mb-16">
                                    <div class="d-flex align-self-center g-mr-15">
                                        <img class="g-width-55 g-height-55 rounded-circle" src="/img-temp/100x100/img7.jpg" alt="Image Description">
                                    </div>

                                    <div class="media-body align-self-center">
                                        <h3 class="g-font-weight-300 g-font-size-16 g-mb-3">J<span class="g-hidden-md-down">ohn&nbsp;</span><span class="g-hidden-md-up">.</span>Doe</h3>
                                        <em class="g-font-style-normal g-color-secondary">Shared Project with Users</em>
                                    </div>
                                </div>

                                <ul class="list-inline d-flex g-mb-20">
                                    <li class="list-inline-item g-mb-10 g-mb-0--sm mr-0">
                                        <img class="g-width-30 g-width-40--md g-height-30 g-height-40--md rounded-circle" src="/img-temp/100x100/img4.jpg" alt="Image Description">
                                    </li>
                                    <li class="list-inline-item g-mb-10 g-mb-0--sm g-ml-7 mr-0">
                                        <img class="g-width-30 g-width-40--md g-height-30 g-height-40--md rounded-circle" src="/img-temp/100x100/img7.jpg" alt="Image Description">
                                    </li>
                                    <li class="list-inline-item g-mb-10 g-mb-0--sm g-ml-7 mr-0">
                                        <img class="g-width-30 g-width-40--md g-height-30 g-height-40--md rounded-circle" src="/img-temp/100x100/img14.jpg" alt="Image Description">
                                    </li>
                                    <li class="list-inline-item g-mb-10 g-mb-0--sm g-ml-7 mr-0">
                                        <img class="g-width-30 g-width-40--md g-height-30 g-height-40--md rounded-circle" src="/img-temp/100x100/img15.jpg" alt="Image Description">
                                    </li>
                                    <li class="list-inline-item g-mb-10 g-mb-0--sm g-ml-7 mr-0">
                                        <div class="d-flex align-items-center justify-content-center g-width-30 g-width-40--md g-height-30 g-height-40--md g-bg-gray-light-v8 g-font-size-14 g-font-size-16--md g-color-secondary rounded-circle">+5</div>
                                    </li>
                                </ul>
                                <em class="d-flex align-self-center align-items-center g-font-style-normal g-color-gray-dark-v6">
                                    <i class="hs-admin-time g-font-size-default g-font-size-18--md g-color-gray-light-v3"></i>
                                    <span class="g-font-weight-300 g-font-size-12 g-font-size-default--md g-ml-4 g-ml-8--md">10 Min <span class="g-hidden-md-down">ago</span></span>
                                </em>
                            </div>

                            <hr class="d-flex g-brd-gray-light-v4 g-ml-35--md g-my-20 g-my-30--md">
                        </section>

                        <a class="d-flex align-items-center text-uppercase u-link-v5 g-font-style-normal g-color-secondary g-ml-25--md" href="#">
                            <i class="hs-admin-reload g-font-size-20"></i>
                            <span class="g-font-size-12 g-font-size-default--md g-ml-10 g-ml-25--md">Load more</span>
                        </a>
                    </div>
                </div>
                <!-- End Activity Card -->
            </div>
        </div>
    </div>
@endsection