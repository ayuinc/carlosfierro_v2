'use-strict'
$(document).ready ->
	# DISABLE ANCHORS
	# $('.disable-anchors a').click (e)->
	# 	e.preventDefault()
	# 	return

	# HREFerence for anchor blocks 
	# $('[data-href]').click((e)->
	# 	locationArr = window.location.pathname.split('/')
	# 	lastPath = locationArr[locationArr.length - 1]
	# 	mainPath = locationArr[locationArr.length - 2]
	# 	pathObj = {}
	# 	pathObj[mainPath] = lastPath
	# 	window.history.pushState(pathObj, '', lastPath)
	# 	document.location.replace($(this).data('href'))
	# 	return
	# 	)
	
	# PROJECT DETAILS
	$('.project-details-trigger').click (e)->
		$('.project-details-trigger i').toggleClass 'icon-minus'
		$('.gallery-container').toggleClass 'display-project-details'
		return

	# TRANSFORM ICONS INITIALIZE
	# transformicons.add('.tcon')

	return # END ON READY