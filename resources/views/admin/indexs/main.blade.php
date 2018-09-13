
@extends('admin.layouts.layout')

@section('title', '首页')

@section('css')
  <link href="{{loadEdition('/admin/css/pxgridsicons.min.css')}}" rel="stylesheet" />
@endsection
@section('content')
  <div class="row state-overview">
    <div class="col-lg-3 col-sm-6">
      <section class="panel">
        <div class="symbol userblue">
          <i class="icon-users"></i>
        </div>
        <div class="value">
          <a href="#"><h1 id="count1">0</h1></a>
          <p>用户总量</p>
        </div>
      </section>
    </div>
    <div class="col-lg-3 col-sm-6">
      <section class="panel">
        <div class="symbol commred">
          <i class="icon-user-add"></i>
        </div>
        <div class="value">
          <a href="#"><h1 id="count2">0</h1></a>
          <p>今日注册用户</p>
        </div>
      </section>
    </div>
    <!--div class="col-lg-3 col-sm-6">
      <section class="panel">
        <div class="symbol articlegreen">
          <i class="icon-check-circle"></i>
        </div>
        <div class="value">
          <a href="#"><h1 id="count3">1876</h1></a>
          <p>笑话总数</p>
        </div>
      </section>
    </div-->
    <!--div class="col-lg-3 col-sm-6">
      <section class="panel">
        <div class="symbol rsswet">
          <i class="icon-file-word-o"></i>
        </div>
        <div class="value">
          <a href="#"><h1 id="count4">3</h1></a>
          <p>待审核笑话总数</p>
        </div>
      </section>
    </div-->
  </div>
  <div class="row">
    <div class="col-lg-6">
      <section class="panel">
        <header class="panel-heading bm0">
          <span><strong>服务器信息</strong></span>
          <span class="tools pull-right">
                                <a class="icon-chevron-down" href="javascript:;"></a>
                            </span>
        </header>
        <div class="panel-body" id="panel-bodys" style="display: block;">
          <table class="table table-hover personal-task">
            <tbody>
            <tr>
              <td>
                <strong>Laravel版本</strong>：{{app()->version()}}</td>
              <td></td>
            </tr>
            <tr>
              <td>
                <strong>PHP版本</strong>：PHP/{{PHP_VERSION}}</td>
              <td></td>
            </tr>
            <tr>
              <td>
                <strong>操作系统：</strong>：{{PHP_OS}}</td>
              <td></td>
            </tr>
            <tr>
              <td>
                <strong>WEB服务器</strong>：{{php_sapi_name()}}</td>
              <td></td>
            </tr>
            <tr>
              <td>
                <strong>主机名</strong>：{{php_uname()}}</td>
              <td></td>
            </tr>
            <tr>
              <td>
                <strong>时区</strong>：{{config('app.timezone')}}</td>
              <td></td>
            </tr>
            <tr>
              <td>
                <strong>ENV</strong>：{{config('app.env')}}</td>
              <td></td>
            </tr>
            <tr>
              <td>
                <strong>路径</strong>：{{config('app.url')}}</td>
              <td></td>
            </tr>
            <tr>
              <td>
                <strong>缓存驱动</strong>：{{config('cache.default')}}</td>
              <td></td>
            </tr>
            <tr>
              <td>
                <strong>session驱动</strong>：{{config('session.driver')}}</td>
              <td></td>
            </tr>
            <tr>
              <td>
                <strong>队列驱动</strong>：{{config('queue.default')}}</td>
              <td></td>
            </tr>
            </tbody>
          </table>
        </div>
      </section>
    </div>
  </div>
@stop
