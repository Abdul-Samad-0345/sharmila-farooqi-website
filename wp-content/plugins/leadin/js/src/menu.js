import $ from 'jquery';

import { hubspotBaseUrl, portalId, i18n } from './constants/leadinConfig';

function addMenuItem(text, href) {
  const link = $(`<li><a href="${href}" target="_blank">${text}</a></li>`);

  const lastLink = $('#toplevel_page_leadin')
    .find('li')
    .last()
    .prev();

  $(lastLink).before(link);
}

export function addExternalLinks() {
  const chatflowsUrl = `${hubspotBaseUrl}/chatflows/${portalId}`;
  addMenuItem(i18n.chatflows, chatflowsUrl);
}
