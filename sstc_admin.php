<?php 
?>
  <div class="ssta-admin">
    <h1 class="ssta-admin__title">Instructions</h1>

    <div class="ssta-admin__instructions">
      <h2 class="ssta-admin__subtitle">Shortcodes</h2>
      <h3>Wraps each accordion pair</h3>
      <p>[sst_col_row] [/sst_col_row]</p>
      
      <h3>20% based grid sst_col_1_5, sst_col_2_5, sst_col_3_5, sst_col_4_5</h3>
      <pre class="ssta-admin__code-block">
        <span class="ssta-admin__scode">[sst_col_1_5] [/sst_col_1_5]</span>
        <span class="ssta-admin__scode">[sst_col_2_5] [/sst_col_2_5]</span>
        <span class="ssta-admin__scode">[sst_col_3_5] [/sst_col_3_5]</span>
        <span class="ssta-admin__scode">[sst_col_4_5] [/sst_col_4_5]</span>
      </pre>
      
      <h3>25% based grid sst_col_1_4, sst_col_1_2, sst_col_3_4</h3>
      <pre class="ssta-admin__code-block">
        <span class="ssta-admin__scode">[sst_col_1_4] [/sst_col_1_4]</span>
        <span class="ssta-admin__scode">[sst_col_1_2] [/sst_col_1_2]</span>
        <span class="ssta-admin__scode">[sst_col_3_4] [/sst_col_3_4]</span>
      </pre>
      
      <h3>30% based grid sst_col_1_3, sst_col_2_3</h3>
      <pre class="ssta-admin__code-block">
        <span class="ssta-admin__scode">[sst_col_1_3] [/sst_col_1_3]</span>
        <span class="ssta-admin__scode">[sst_col_2_3] [/sst_col_2_3]</span>
      </pre>
    </div>

    <div class="ssta-admin__example">
      <h2 class="ssta-admin__subtitle">Usage Example</h2>
      <pre class="ssta-admin__code-block">
        <span class="ssta-admin__scode">[sst_col_row]</span>
          <span class="ssta-admin__scode">[sst_col_1_4]</span>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          <span class="ssta-admin__scode">[/sst_col_1_4]</span>

          <span class="ssta-admin__scode">[sst_col_3_4]</span>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          <span class="ssta-admin__scode">[/sst_col_3_4]</span>
        <span class="ssta-admin__scode">[/sst_col_row]</span>
      </pre>

      <pre class="ssta-admin__code-block">
        <span class="ssta-admin__scode">[sst_col_row]</span>
          <span class="ssta-admin__scode">[sst_col_1_5]</span>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          <span class="ssta-admin__scode">[/sst_col_1_5]</span>

          <span class="ssta-admin__scode">[sst_col_2_5]</span>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          <span class="ssta-admin__scode">[/sst_col_2_5]</span>

          <span class="ssta-admin__scode">[sst_col_2_5]</span>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          <span class="ssta-admin__scode">[/sst_col_2_5]</span>
        <span class="ssta-admin__scode">[/sst_col_row]</span>
      </pre>
    </div>
  </div>