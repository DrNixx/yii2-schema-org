<?php

namespace onix\schemaorg\models;

/**
 * Model for MusicPlaylist
 *
 * @package onix\schemaorg\models
 * @see http://schema.org/MusicPlaylist
 */
class MusicPlaylist extends CreativeWork {
	/**
	* @var integer The number of tracks in this album or playlist.
	*/
	public $numTracks;

	/**
	* @var ItemList|MusicRecording A music recording (track)—usually a single song. If an ItemList is given, the list should contain items of type MusicRecording. Supersedes tracks.
	*/
	public $track;

}