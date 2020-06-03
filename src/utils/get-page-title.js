import defaultSettings from '@/settings'

const title = defaultSettings.title || '国内FORU分销系统'

export default function getPageTitle(pageTitle) {
  if (pageTitle) {
    return `${pageTitle} - ${title}`
  }
  return `${title}`
}
