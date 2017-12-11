@extends('layouts/app')

@section('content')
<div class="Polaris-Page">
  <div class="Polaris-Page__Header Polaris-Page__Header--hasPagination Polaris-Page__Header--hasBreadcrumbs Polaris-Page__Header--hasRollup Polaris-Page__Header--hasSecondaryActions">
    <div class="Polaris-Page__Navigation">
      <nav role="navigation"><a class="Polaris-Breadcrumbs__Breadcrumb" data-polaris-unstyled="true"><span class="Polaris-Breadcrumbs__Icon"><span class="Polaris-Icon"><svg class="Polaris-Icon__Svg" viewBox="0 0 20 20"><path d="M12 16a.997.997 0 0 1-.707-.293l-5-5a.999.999 0 0 1 0-1.414l5-5a.999.999 0 1 1 1.414 1.414L8.414 10l4.293 4.293A.999.999 0 0 1 12 16" fill-rule="evenodd"></path></svg></span></span><span class="Polaris-Breadcrumbs__Content">Products</span></a></nav>
      <div
        class="Polaris-Page__Pagination">
        <nav class="Polaris-Pagination Polaris-Pagination--plain" aria-label="Pagination"><button class="Polaris-Pagination__Button" aria-label="Previous"><span class="Polaris-Icon"><svg class="Polaris-Icon__Svg" viewBox="0 0 20 20"><path d="M17 9H5.414l3.293-3.293a.999.999 0 1 0-1.414-1.414l-5 5a.999.999 0 0 0 0 1.414l5 5a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414L5.414 11H17a1 1 0 1 0 0-2" fill-rule="evenodd"></path></svg></span></button>
          <button
            class="Polaris-Pagination__Button" aria-label="Next"><span class="Polaris-Icon"><svg class="Polaris-Icon__Svg" viewBox="0 0 20 20"><path d="M17.707 9.293l-5-5a.999.999 0 1 0-1.414 1.414L14.586 9H3a1 1 0 1 0 0 2h11.586l-3.293 3.293a.999.999 0 1 0 1.414 1.414l5-5a.999.999 0 0 0 0-1.414" fill-rule="evenodd"></path></svg></span></button>
        </nav>
    </div>
  </div>
  <div class="Polaris-Page__MainContent">
    <div class="Polaris-Page__TitleAndActions">
      <div class="Polaris-Page__Title">
        <h1 class="Polaris-DisplayText Polaris-DisplayText--sizeLarge">Jar With Lock-Lid</h1>
      </div>
      <div class="Polaris-Page__Actions">
        <div class="Polaris-Page__PrimaryAction"><button type="button" class="Polaris-Button Polaris-Button--primary Polaris-Button--disabled" disabled=""><span class="Polaris-Button__Content"><span>Save</span></span></button></div>
        <div class="Polaris-Page__SecondaryActions">
          <div class="Polaris-Page__Rollup">
            <div><button type="button" class="Polaris-Button" tabindex="0" aria-controls="Popover1" aria-owns="Popover1" aria-haspopup="true" aria-expanded="false"><span class="Polaris-Button__Content"><span>Actions</span><span class="Polaris-Button__Icon"><span class="Polaris-Icon"><svg class="Polaris-Icon__Svg" viewBox="0 0 20 20"><path d="M5 8l5 5 5-5z" fill-rule="evenodd"></path></svg></span></span></span></button></div>
          </div>
          <div class="Polaris-Page__IndividualActions"><button class="Polaris-Page__Action" type="button">Duplicate</button><button class="Polaris-Page__Action" type="button">View on your store</button></div>
        </div>
      </div>
    </div>
    <div class="Polaris-Page__PrimaryAction"><button type="button" class="Polaris-Button Polaris-Button--primary Polaris-Button--disabled" disabled=""><span class="Polaris-Button__Content"><span>Save</span></span></button></div>
  </div>
</div>
<div class="Polaris-Page__Content">
  <p>Page content</p>
</div>
</div>
@endsection
