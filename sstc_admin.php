<?php 
?>
  <div class="ssta-admin">
    <h1 class="ssta-admin__title">Instructions</h1>

    <div class="ssta-admin__instructions">
      <h2 class="ssta-admin__subtitle">Shortcodes</h2>
      <h3>Wraps each accordion pair</h3>
      <p>[sst_col_row] [/sst_col_row]</p>
      
      <h3>20% based grid sst_col_1_5, sst_col_2_5, sst_col_3_5, sst_col_4_5, sst_col_1</h3>
      <pre class="ssta-admin__code-block">
        <span class="ssta-admin__scode">[sst_col_1_5] [/sst_col_1_5] || 20%</span>
        <span class="ssta-admin__scode">[sst_col_2_5] [/sst_col_2_5] || 40%</span>
        <span class="ssta-admin__scode">[sst_col_3_5] [/sst_col_3_5] || 60%</span>
        <span class="ssta-admin__scode">[sst_col_4_5] [/sst_col_4_5] || 80%</span>
        <span class="ssta-admin__scode">[sst_col_1] [/sst_col_1]     || 100%</span>
      </pre>
      
      <h3>25% based grid sst_col_1_4, sst_col_1_2, sst_col_3_4, sst_col_1</h3>
      <pre class="ssta-admin__code-block">
        <span class="ssta-admin__scode">[sst_col_1_4] [/sst_col_1_4] || 25%</span>
        <span class="ssta-admin__scode">[sst_col_1_2] [/sst_col_1_2] || 50%</span>
        <span class="ssta-admin__scode">[sst_col_3_4] [/sst_col_3_4] || 75%</span>
        <span class="ssta-admin__scode">[sst_col_1] [/sst_col_1]     || 100%</span>
      </pre>
      
      <h3>16% based grid sst_col_1_6, sst_col_1_3, sst_col_1_2, sst_col_2_3, sst_col_5_6, sst_col_1</h3>
      <pre class="ssta-admin__code-block">
        <span class="ssta-admin__scode">[sst_col_1_6] [/sst_col_1_6] || 16.6667%</span>
        <span class="ssta-admin__scode">[sst_col_1_3] [/sst_col_1_3] || 33.3333%</span>
        <span class="ssta-admin__scode">[sst_col_1_2] [/sst_col_1_2] || 50%</span>
        <span class="ssta-admin__scode">[sst_col_2_3] [/sst_col_2_3] || 66.6667%</span>
        <span class="ssta-admin__scode">[sst_col_5_6] [/sst_col_5_6] || 83.3333%</span>
        <span class="ssta-admin__scode">[sst_col_1] [/sst_col_1]     || 100%</span>
      </pre>
    </div>

    <div class="ssta-admin__example">
      <h2 class="ssta-admin__subtitle">How to use this in your theme.</h2>

      <p>Each row of columns opens with <code>[sst_col_row]</code> and ends with <code>[/sst_col_row]</code>.</p>
      <p>To make a column just open with any column tag (Example: <code>[sst_col_1_6]</code>) put your content and then close it with the same ending tag (Example: <code>[/sst_col_1_6]</code>). Then do the same with all other columns in the row. Just make sure that at the end all of your column widths end up adding up to 100%.</p>

      <h2 class="ssta-admin__subtitle">Usage Example</h2>

      <pre class="ssta-admin__code-block">
        <span class="ssta-admin__scode">[sst_col_row]</span>
          <span class="ssta-admin__scode">[sst_col_1_4]</span>
            Add Some Column Content Here
          <span class="ssta-admin__scode">[/sst_col_1_4]</span>

          <span class="ssta-admin__scode">[sst_col_3_4]</span>
            Add Some More Column Content Here
          <span class="ssta-admin__scode">[/sst_col_3_4]</span>
        <span class="ssta-admin__scode">[/sst_col_row]</span>

        <span class="ssta-admin__scode">[sst_col_row]</span>
          <span class="ssta-admin__scode">[sst_col_1_5]</span>
            Add Some Column Content Here
          <span class="ssta-admin__scode">[/sst_col_1_5]</span>

          <span class="ssta-admin__scode">[sst_col_1_5]</span>
            Add Some Column Content Here
          <span class="ssta-admin__scode">[/sst_col_1_5]</span>

          <span class="ssta-admin__scode">[sst_col_3_5]</span>
            Add Some More Column Content Here
          <span class="ssta-admin__scode">[/sst_col_3_5]</span>
        <span class="ssta-admin__scode">[/sst_col_row]</span>
      </pre>
    </div>
  </div>