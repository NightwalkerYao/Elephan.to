<div class="card-panel transparent">  <h4 class="no-margin-top"><i class="material-icons left cyan-text" style="font-size: 27pt">vpn_lock</i> Administartion Panel > User Group Settings</h4>  <div class="row"><if:add_new>  <form action="<tag:frm_action />" name="level" method="post">    <div class="col input-field">      <i class="material-icons prefix">title</i>      <input type="text" name="gname" value="" id="gname" />      <label for="gname"><tag:language.GROUP_NAME /></label>    </div>    <div class="col input-field">      <i class="material-icons prefix">show_chart</i>      <tag:groups_combo />      <label><tag:language.GROUP_BASE_LEVEL /></label>    </div>    <div class="col l12 s12 center">      <input type="submit" class="btn" name="write" value="<tag:language.FRM_CONFIRM />" />      &nbsp;&nbsp;&nbsp;      <input type="submit" class="btn" name="write" value="<tag:language.FRM_CANCEL />" />    </div>  </form><else:add_new><if:list>  <div style="overflow:auto; max-width:750px;">    <table class="lista" width="100%" align="center">  <tr>    <td class="header" align="center"><tag:language.GROUP /></td>    <td class="header" align="center"><tag:language.MNU_TORRENT /><br /><tag:language.VIEW_EDIT_DEL /></td>    <td class="header" align="center"><tag:language.MEMBERS /><br /><tag:language.VIEW_EDIT_DEL /></td>    <td class="header" align="center"><tag:language.MNU_NEWS /><br /><tag:language.VIEW_EDIT_DEL /></td>    <td class="header" align="center"><tag:language.MNU_FORUM /><br /><tag:language.VIEW_EDIT_DEL /></td>    <td class="header" align="center"><tag:language.MNU_UPLOAD /></td>    <td class="header" align="center"><tag:language.DOWNLOAD /></td>    <td class="header" align="center"><tag:language.ADMIN_CPANEL /></td>    <td class="header" align="center"><tag:language.WT /></td>    <if:smf_in_use_1>    <td class="header" align="center"><tag:language.SMF_MIRROR /></td>    </if:smf_in_use_1>    <if:ipb_in_use_1>    <td class="header" align="center"><tag:language.IPB_MIRROR /></td>    </if:ipb_in_use_1>    <td class="header" align="center"><tag:language.DELETE /></td>  </tr>  <loop:groups>  <tr>    <td class="lista" align="center"><tag:groups[].user /></td>    <td class="lista" align="center"><tag:groups[].torrent_aut /></td>    <td class="lista" align="center"><tag:groups[].users_aut /></td>    <td class="lista" align="center"><tag:groups[].news_aut /></td>    <td class="lista" align="center"><tag:groups[].forum_aut /></td>    <td class="lista" align="center"><tag:groups[].can_upload /></td>    <td class="lista" align="center"><tag:groups[].can_download /></td>    <td class="lista" align="center"><tag:groups[].admin_access /></td>    <td class="lista" align="center"><tag:groups[].WT /></td>    <if:smf_in_use_2>    <td class="lista" align="center"><tag:groups[].smf_group_mirror /></td>    </if:smf_in_use_2>    <if:ipb_in_use_2>    <td class="lista" align="center"><tag:groups[].ipb_group_mirror /></td>    </if:ipb_in_use_2>    <td class="lista" align="center"><tag:groups[].delete /></td>  </tr>  </loop:groups>  </table><table class="lista" width="100%" align="center">  <tr>    <td class="header" align="center"><tag:group_add_new /></td>  </tr></table></div><else:list>  <form action="<tag:frm_action />" name="level" method="post">    <div class="col input-field">      <i class="material-icons prefix">title</i>      <input type="text" name="gname" value="<tag:group.level />" id="gname" />      <label for="gname"><tag:language.GROUP_NAME /></label>    </div>    <div class="col input-field">      <i class="material-icons prefix">format_color_fill</i>      <input type="text" name="pcolor" value="<tag:group.prefixcolor />" id="pcolor" maxlength="150" />      <label for="pcolor"><tag:language.GROUP_PCOLOR />&lt;span style='color:red'&gt;):</label>    </div>    <div class="col input-field">      <i class="material-icons prefix">view_stream</i>      <input type="text" name="scolor" value="<tag:group.suffixcolor />" id="scolor" maxlength="150" />      <label for="scolor"><tag:language.GROUP_SCOLOR />&lt;/span&gt;):</label>    </div>    <div class="col input-field">      <i class="material-icons prefix">timer</i>      <input type="text" name="waiting" value="<tag:group.WT />" id="waiting" maxlength="10" />      <label for="waiting"><tag:language.GROUP_WT />&nbsp;(hours):</label>    </div>    <div class="row s12 l12 block">      <div class="col s3 l2"><tag:language.MNU_TORRENT /></div>      <div class="col s9 l10 input-field">        <p class="col">          <label for="vtorrents">            <input type="checkbox" name="vtorrents" id="vtorrents" <tag:group.view_torrents /> />            <span><tag:language.GROUP_VIEW />&nbsp;</span>          </label>        </p>        <p class="col">          <label for="etorrents">            <input type="checkbox" name="etorrents" id="etorrents" <tag:group.edit_torrents /> />            <span><tag:language.GROUP_EDIT />&nbsp;&nbsp;</span>          </label>        </p>        <p class="col">          <label for="dtorrents">            <input type="checkbox" name="dtorrents" id="dtorrents" <tag:group.delete_torrents /> />            <span><tag:language.GROUP_DELETE />&nbsp;</span>          </label>        </p>      </div>    </div>    <div class="row s12 l12">      <div class="col l2 s3"><tag:language.MEMBERS /></div>      <div class="col l10 s9 input-field">        <p class="col">          <label for="vusers">            <input type="checkbox" name="vusers" id="vusers" <tag:group.view_users /> />            <span><tag:language.GROUP_VIEW />&nbsp;&nbsp;</span>          </label>        </p>        <p class="col">          <label for="eusers">            <input type="checkbox" name="eusers" id="eusers" <tag:group.edit_users /> />            <span><tag:language.GROUP_EDIT />&nbsp;&nbsp;</span>          </label>        </p>        <p class="col">          <label for="dusers">            <input type="checkbox" name="dusers" <tag:group.delete_users /> id="dusers" />            <span><tag:language.GROUP_DELETE /></span>          </label>        </p>      </div>    </div>    <div class="row l12 s12">      <div class="col s3 l2"><tag:language.MNU_NEWS /></div>      <div class="col s9 l10 input-field">        <p class="col">        <label for="vnews">          <input type="checkbox" name="vnews" <tag:group.view_news /> id="vnews" />          <span><tag:language.GROUP_VIEW />&nbsp;&nbsp;</span>        </label>        </p>        <p class="col">          <label for="enews">            <input type="checkbox" name="enews" <tag:group.edit_news /> id="enews" />            <span><tag:language.GROUP_EDIT />&nbsp;&nbsp;</span>          </label>        </p>        <p class="col">          <label for="dnews">            <input type="checkbox" name="dnews" <tag:group.delete_news /> id="dnews"/>            <span><tag:language.GROUP_DELETE /></span>          </label>        </p>      </div>    </div>    <div class="row l12 s12">      <div class="col l2 s3"><tag:language.GROUP_VIEW_FORUM /></div>      <div class="col l10 s9 input-field">        <p class="col">          <label for="vforum">            <input type="checkbox" name="vforum" <tag:group.view_forum /> id="vforum"/>            <span><tag:language.GROUP_VIEW />&nbsp;&nbsp;</span>          </label>        </p>        <p class="col">          <label for="eforum">            <input type="checkbox" name="eforum" <tag:group.edit_forum /> id="eforum"/>            <span><tag:language.GROUP_EDIT />&nbsp;&nbsp;</span>          </label>        </p>        <p class="col">          <label for="dforum">            <input type="checkbox" name="dforum" <tag:group.delete_forum /> id="dforum"/>            <span><tag:language.GROUP_DELETE /></span>          </label>        </p>      </div>    </div>    <div class="row s12 l12 block">      <div class="col s12 l12 input-field">        <p class="col">          <label for="upload">            <input type="checkbox" name="upload" <tag:group.can_upload /> id="upload"/>            <span><tag:language.GROUP_UPLOAD /></span>          </label>        </p>        <p class="col">          <label for="down">            <input type="checkbox" name="down" <tag:group.can_download /> id="down" />            <span><tag:language.GROUP_DOWNLOAD /></span>          </label>        </p>        <p class="col">          <label for="admincp">            <input type="checkbox" name="admincp" <tag:group.admin_access /> id="admincp" />            <span><tag:language.GROUP_GO_CP /></span>          </label>        </p>        <if:smf_in_use_3>          <p class="col">            <span><tag:language.GROUP_SMF_MIRROR /></span>            <input type="text" name="smf_group_mirror" value="<tag:group.smf_group_mirror />" maxlength="4" id="smf_group_mirror"/>            <label for="smf_group_mirror"><tag:group.forumlist /></label>          </p>        </if:smf_in_use_3>        <if:ipb_in_use_3>          <p class="col">            <span><tag:language.GROUP_IPB_MIRROR /></span>            <input type="text" name="ipb_group_mirror" value="<tag:group.ipb_group_mirror />" maxlength="4" id="ipb_group_mirror" />            <label for="ipb_group_mirror"><tag:group.forumlist /></label>          </p>        </if:ipb_in_use_3>      </div>    </div>    <div class="col s12 l12 center">      <input type="submit" class="btn" name="write" value="<tag:language.FRM_CONFIRM />" />      &nbsp;&nbsp;&nbsp;      <input type="submit" class="btn" name="write" value="<tag:language.FRM_CANCEL />" />    </div></form></if:list></if:add_new>    </div>  </div>